<?php

namespace App\Livewire;

use App\Models\Category;
use Flux\Flux;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithPagination;

class CategoryMain extends Component
{
    use WithPagination;

    public $search, $id;

    #[Validate('required')]
    public $slug;

    public $descripcion;

    public function render()
    {
        $categorias = Category::search($this->search)
            ->latest()
            ->paginate();

        return view('livewire.category-main', compact('categorias'));
    }

    public function save()
    {
        $this->validate();

        if (!$this->id) {
            Category::create([
                'slug' => $this->slug,
                'descripcion' => $this->descripcion,
            ]);

            Flux::toast(
                heading: 'Categoría registrada.',
                text: 'La categoría se ha registrado correctamente.',
                variant: 'success',
            );
        } else {
            $categoria = Category::find($this->id);

            $categoria->update([
                'id' => $this->id,
                'slug' => $this->slug,
                'descripcion' => $this->descripcion,
            ]);

            Flux::toast(
                heading: 'Categoría actualizada.',
                text: 'La categoría se ha actualizado correctamente.',
                variant: 'success',
            );
        }

        $this->modal('showform')->close();
    }

    public function edit(Category $item)
    {
        $this->id = $item->id;
        $this->slug = $item->slug;
        $this->descripcion = $item->descripcion;

        $this->modal('showform')->show();
    }

    public function create()
    {
        $this->reset(['id', 'slug', 'descripcion']);

        $this->modal('showform')->show();
    }

    public function confirm(Category $item)
    {
        $this->id = $item->id;

        $this->modal('delete-profile')->show();
    }

    public function delete()
    {
        $item = Category::find($this->id);

        if ($item->products()->exists()) {
            Flux::toast(
                heading: 'No se puede eliminar.',
                text: 'Esta categoría tiene productos asociados. Reasígnelos o elimínelos primero.',
                variant: 'danger',
            );

            $this->modal('delete-profile')->close();

            return;
        }

        $item->delete();

        Flux::toast(
            heading: 'Categoría eliminada.',
            text: 'La categoría se ha eliminado correctamente.',
            variant: 'success',
        );

        $this->modal('delete-profile')->close();
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }
}
