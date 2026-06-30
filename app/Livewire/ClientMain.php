<?php

namespace App\Livewire;

use App\Models\Client;
use Flux\Flux;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithPagination;

class ClientMain extends Component
{
    use WithPagination;

    public $search, $direccion, $id;
    public $clientSelectedId = null;

    #[Validate('required')]
    public $nombre, $correo, $telefono, $activo;

    public function render()
    {
        $clients = Client::where('nombre', 'like', '%'.$this->search.'%')
            ->latest('id')
            ->paginate();

        return view('livewire.client-main', compact('clients'));
    }

    public function save()
    {
        $this->validate();

        if (!$this->id) {

            Client::create([
                'nombre' => $this->nombre,
                'correo' => $this->correo,
                'telefono' => $this->telefono,
                'direccion' => $this->direccion,
                'activo' => $this->activo
            ]);

            Flux::toast(
                heading: 'Cliente registrado.',
                text: 'El cliente se ha registrado correctamente.',
                variant: 'success',
            );

        } else {

            $client = Client::find($this->id);

            $client->update([
                'id' => $this->id,
                'nombre' => $this->nombre,
                'correo' => $this->correo,
                'telefono' => $this->telefono,
                'direccion' => $this->direccion,
                'activo' => $this->activo
            ]);

            Flux::toast(
                heading: 'Cliente actualizado.',
                text: 'El cliente se ha actualizado correctamente.',
                variant: 'success',
            );
        }

        $this->modal('showform')->close();
    }

    public function edit(Client $item)
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

    public function confirm(Client $item)
    {
        $this->id = $item->id;

        $this->modal('delete-profile')->show();
    }

    public function delete()
    {
        $item = Client::find($this->id);

        $item->update([
            'activo' => false
        ]);

        Flux::toast(
            heading: 'Cliente deshabilitado.',
            text: 'El cliente se ha deshabilitado correctamente.',
            variant: 'success',
        );

        $this->modal('delete-profile')->close();
    }

    public function deletePermanent()
    {
        $item = Client::find($this->id);

        $item->images()->delete();
        $item->delete();

        DB::statement('ALTER TABLE clients AUTO_INCREMENT = ' . (Client::max('id') + 1));

        Flux::toast(
            heading: 'Cliente eliminado definitivamente.',
            text: 'El cliente y sus imágenes se han eliminado permanentemente.',
            variant: 'success',
        );

        $this->modal('delete-profile')->close();
    }

    public function openUpload(Client $item) {
        $this->clientSelectedId = $item->id;
        $this->modal('showUpload')->show();
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }
}
