<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Category;
use App\Models\Ambiente;
use Flux\Flux;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithPagination;

class ProductMain extends Component
{
    use WithPagination;

    public $search, $descripcion, $id, $category_id, $codigo, $medidas, $marca;
    public $productSelectedId = null;
    public $filterCategory = '';
    public $ambientes = [];

    #[Validate('required')]
    public $nombre, $cantidad, $precio, $disponible;

    public function render()
    {
        $productos = Product::with('ambientes')
            ->search($this->search)
            ->byCategory($this->filterCategory)
            ->latest('id')
            ->paginate();

        $categorias = Category::all();
        $allAmbientes = Ambiente::orderBy('nombre')->get();

        return view('livewire.product-main', compact('productos', 'categorias', 'allAmbientes'));
    }

    public function save()
    {
        $this->validate();

        $data = [
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion ?: '',
            'codigo' => $this->codigo ?: null,
            'medidas' => $this->medidas ?: null,
            'marca' => $this->marca ?: null,
            'cantidad' => $this->cantidad,
            'precio' => $this->precio,
            'disponible' => $this->disponible,
            'category_id' => $this->category_id ?: null,
        ];

        if (!$this->id) {
            $producto = Product::create($data);
            $producto->ambientes()->sync($this->ambientes ?? []);

            Flux::toast(
                heading: 'Producto registrado.',
                text: 'El producto se ha registrado correctamente.',
                variant: 'success',
            );
        } else {
            $producto = Product::find($this->id);
            $producto->update($data);
            $producto->ambientes()->sync($this->ambientes ?? []);

            Flux::toast(
                heading: 'Producto actualizado.',
                text: 'El producto se ha actualizado correctamente.',
                variant: 'success',
            );
        }

        $this->modal('showform')->close();
    }

    public function edit(Product $item)
    {
        $this->id = $item->id;
        $this->nombre = $item->nombre;
        $this->descripcion = $item->descripcion;
        $this->codigo = $item->codigo;
        $this->medidas = $item->medidas;
        $this->marca = $item->marca;
        $this->cantidad = $item->cantidad;
        $this->precio = $item->precio;
        $this->disponible = $item->disponible;
        $this->category_id = $item->category_id;
        $this->ambientes = $item->ambientes->pluck('id')->toArray();

        $this->modal('showform')->show();
    }

    public function create()
    {
        $this->reset([
            'id', 'nombre', 'descripcion', 'codigo', 'medidas', 'marca',
            'cantidad', 'precio', 'disponible', 'category_id', 'ambientes',
        ]);

        $this->modal('showform')->show();
    }

    public function confirm(Product $item)
    {
        $this->id = $item->id;

        $this->modal('delete-profile')->show();
    }

    public function delete()
    {
        $item = Product::find($this->id);

        $item->update([
            'disponible' => false
        ]);

        Flux::toast(
            heading: 'Producto deshabilitado.',
            text: 'El producto se ha deshabilitado correctamente.',
            variant: 'success',
        );

        $this->modal('delete-profile')->close();
    }

    public function deletePermanent()
    {
        $item = Product::find($this->id);

        $item->images()->delete();
        $item->ambientes()->detach();
        $item->delete();

        DB::statement('ALTER TABLE products AUTO_INCREMENT = ' . (Product::max('id') + 1));

        Flux::toast(
            heading: 'Producto eliminado definitivamente.',
            text: 'El producto y sus imágenes se han eliminado permanentemente.',
            variant: 'success',
        );

        $this->modal('delete-profile')->close();
    }

    public function openUpload(Product $item)
    {
        $this->productSelectedId = $item->id;

        $this->modal('showUpload')->show();
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingFilterCategory(): void
    {
        $this->resetPage();
    }
}
