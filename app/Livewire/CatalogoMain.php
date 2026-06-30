<?php

namespace App\Livewire;

use App\Models\Catalogo;
use Flux\Flux;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class CatalogoMain extends Component
{
    use WithFileUploads, WithPagination;

    public $search, $id;
    public $titulo;
    public $archivo;
    public $descripcion;
    public $orden = 0;
    public $activo = true;

    public function render()
    {
        $catalogos = Catalogo::query()
            ->when($this->search, fn($q) => $q->where('titulo', 'like', "%{$this->search}%"))
            ->orderBy('orden')
            ->latest()
            ->paginate();

        return view('livewire.catalogo-main', compact('catalogos'));
    }

    public function save()
    {
        $this->validate([
            'titulo' => 'required|string|max:255',
            'archivo' => $this->id ? 'nullable|file|mimes:pdf|max:10240' : 'required|file|mimes:pdf|max:10240',
            'descripcion' => 'nullable|string',
            'orden' => 'integer|min:0',
            'activo' => 'boolean',
        ]);

        $data = [
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'orden' => $this->orden ?: 0,
            'activo' => $this->activo,
        ];

        if ($this->archivo) {
            $data['archivo'] = $this->archivo->store('catalogos', 'public');
        }

        if (!$this->id) {
            Catalogo::create($data);

            Flux::toast(
                heading: 'Catalogo registrado.',
                text: 'El catalogo se ha registrado correctamente.',
                variant: 'success',
            );
        } else {
            Catalogo::find($this->id)->update($data);

            Flux::toast(
                heading: 'Catalogo actualizado.',
                text: 'El catalogo se ha actualizado correctamente.',
                variant: 'success',
            );
        }

        $this->modal('showform')->close();
    }

    public function edit(Catalogo $item)
    {
        $this->id = $item->id;
        $this->titulo = $item->titulo;
        $this->descripcion = $item->descripcion;
        $this->orden = $item->orden;
        $this->activo = $item->activo;
        $this->archivo = null;

        $this->modal('showform')->show();
    }

    public function create()
    {
        $this->reset(['id', 'titulo', 'archivo', 'descripcion', 'orden']);
        $this->activo = true;

        $this->modal('showform')->show();
    }

    public function confirm(Catalogo $item)
    {
        $this->id = $item->id;

        $this->modal('delete-profile')->show();
    }

    public function delete()
    {
        Catalogo::find($this->id)->delete();

        Flux::toast(
            heading: 'Catalogo eliminado.',
            text: 'El catalogo se ha eliminado correctamente.',
            variant: 'success',
        );

        $this->modal('delete-profile')->close();
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }
}
