<?php

namespace App\Livewire;

use App\Models\Cliente;
use Flux\Flux;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithPagination;

class ClienteMain extends Component
{
    use WithPagination;

    public $search, $direccion, $id;

    #[Validate('required')]
    public $nombre, $correo, $telefono, $activo;

    public function render()
    {
        $clientes = Cliente::where('nombre', 'like', '%'.$this->search.'%')
        ->latest()
        ->paginate();

        return view('livewire.cliente-main', compact('clientes'));
    }

    public function save()
    {
        $this->validate();

        if(!$this->id){

            Cliente::create([

                'nombre'=>$this->nombre,
                'correo'=>$this->correo,
                'telefono'=>$this->telefono,
                'direccion'=>$this->direccion,
                'activo'=>$this->activo

            ]);

            Flux::toast(
                heading: 'Cliente registrado.',
                text: 'El cliente se ha registrado correctamente.',
                variant: 'success',
            );

        }else{

            $cliente = Cliente::find($this->id);

            $cliente->update([

                'id'=>$this->id,
                'nombre'=>$this->nombre,
                'correo'=>$this->correo,
                'telefono'=>$this->telefono,
                'direccion'=>$this->direccion,
                'activo'=>$this->activo

            ]);

            Flux::toast(
                heading: 'Cliente actualizado.',
                text: 'El cliente se ha actualizado correctamente.',
                variant: 'success',
            );
        }

        $this->modal('showform')->close();
    }

    public function edit(Cliente $item)
    {
        $this->id = $item->id;
        $this->nombre = $item->nombre;
        $this->correo = $item->correo;
        $this->telefono = $item->telefono;
        $this->direccion = $item->direccion;
        $this->activo = $item->activo;

        $this->modal('showform')->show();
    }

    public function create()
    {
        $this->reset([
            'id',
            'nombre',
            'correo',
            'telefono',
            'direccion',
            'activo'
        ]);

        $this->modal('showform')->show();
    }

    public function confirm(Cliente $item)
    {
        $this->id = $item->id;

        $this->modal('delete-profile')->show();
    }

    public function delete()
    {
        $item = Cliente::find($this->id);

        $item->update([
            'activo'=>false
        ]);

        Flux::toast(
            heading: 'Cliente eliminado.',
            text: 'El cliente se ha eliminado correctamente.',
            variant: 'success',
        );

        $this->modal('delete-profile')->close();
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }
}
