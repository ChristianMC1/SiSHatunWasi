<?php

namespace App\Livewire;

use App\Models\Product;
use Flux\Flux;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithPagination;

class ProductMain extends Component{
    use WithPagination;

    public $search,$descripcion,$id;

    #[Validate('required')]
    public $nombre, $cantidad, $precio, $disponible;

    public function render(){
        $productos=Product::where('nombre', 'like', '%'.$this->search.'%')
        ->latest()->paginate();
        return view('livewire.product-main', compact('productos'));
    }

    public function save (){
            $this->validate();
            if(!$this->id){
            Product::create([
                'nombre'=>$this->nombre,
                'descripcion'=>$this->descripcion,
                'cantidad'=>$this->cantidad,
                'precio'=>$this->precio,
                'disponible'=>$this->disponible
            ]);
            Flux::toast(
                heading: 'Producto registrado.',
                text: 'El producto se ha registrado correctamente.',
                variant: 'success',
            );
        }else{
            $producto=Product::find($this->id);
            $producto->update([
                'id'=>$this->id,
                'nombre'=>$this->nombre,
                'descripcion'=>$this->descripcion,
                'cantidad'=>$this->cantidad,
                'precio'=>$this->precio,
                'disponible'=>$this->disponible
            ]);
            Flux::toast(
                heading: 'Producto actualizado.',
                text: 'El producto se ha actualizado correctamente.',
                variant: 'success',
            );
        }

        $this->modal('showform')->close();
    }

    public function edit (Product $item) {
        $this->id=$item->id;
        $this->nombre=$item->nombre;
        $this->descripcion=$item->descripcion;
        $this->cantidad=$item->cantidad;
        $this->precio=$item->precio;
        $this->disponible=$item->disponible;
        $this->modal('showform')->show();
    }

    public function create(){
        $this->reset(['id','nombre','descripcion','cantidad','precio','disponible']);
        $this->modal('showform')->show();
    }

    public function confirm(Product $item){
        $this->id=$item->id;
        $this->modal('delete-profile')->show();
    }

    public function delete(){
        $item=Product::find($this->id);
        $item->update([
            'disponible'=>false //soft delte
        ]);
        //$item->delete(); hard delete
        Flux::toast(
                heading: 'Producto eliminado.',
                text: 'El producto se ha eliminado correctamente.',
                variant: 'success',
            );
        $this->modal('delete-profile')->close();
    }

    public function updatingSearch(): void{
        $this->resetPage();
    }
}
