<?php

namespace App\Livewire;

use App\Models\User;
use Flux\Flux;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithPagination;

class AdminMain extends Component
{
    use WithPagination;

    public $search, $filterSolicitud = '', $id;

    #[Validate('required|string|max:255')]
    public $name;

    public $telefono;

    #[Validate('required|string|lowercase|email|max:255|unique:users,email')]
    public $email;

    public $password;

    public $activo = true;

    public $solicitud;

    public function boot()
    {
        if (auth()->user()->email !== 'christianmamani587@gmail.com') {
            abort(403);
        }
    }

    public function render()
    {
        $admins = User::query()
            ->when($this->search, fn($q) => $q->where(function ($q) {
                $q->where('name', 'like', "%{$this->search}%")
                  ->orWhere('email', 'like', "%{$this->search}%")
                  ->orWhere('telefono', 'like', "%{$this->search}%");
            }))
            ->when($this->filterSolicitud === 'con', fn($q) => $q->whereNotNull('solicitud')->where('solicitud', '!=', ''))
            ->when($this->filterSolicitud === 'sin', fn($q) => $q->whereNull('solicitud')->orWhere('solicitud', ''))
            ->latest()
            ->paginate();

        return view('livewire.admin-main', compact('admins'));
    }

    public function save()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:users,email,' . ($this->id ?? 'NULL'),
            'telefono' => 'nullable|string|max:20',
            'activo' => 'boolean',
            'solicitud' => 'nullable|string',
        ];

        if (!$this->id) {
            $rules['password'] = ['required', 'string', Password::min(8)->mixedCase()->numbers()->symbols()];
        } else {
            $rules['password'] = ['nullable', 'string', Password::min(8)->mixedCase()->numbers()->symbols()];
        }

        $this->validate($rules);

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'telefono' => $this->telefono ?: null,
            'activo' => $this->activo,
            'solicitud' => $this->solicitud ?: null,
        ];

        if ($this->password) {
            $data['password'] = Hash::make($this->password);
            $data['plain_password'] = $this->password;
        }

        if (!$this->id) {
            User::create($data);

            Flux::toast(
                heading: 'Administrador registrado.',
                text: 'El administrador se ha registrado correctamente.',
                variant: 'success',
            );
        } else {
            User::find($this->id)->update($data);

            Flux::toast(
                heading: 'Administrador actualizado.',
                text: 'El administrador se ha actualizado correctamente.',
                variant: 'success',
            );
        }

        $this->modal('showform')->close();
    }

    public function edit(User $item)
    {
        $this->id = $item->id;
        $this->name = $item->name;
        $this->email = $item->email;
        $this->telefono = $item->telefono;
        $this->password = $item->plain_password ?? '';
        $this->activo = $item->activo;
        $this->solicitud = $item->solicitud;

        $this->modal('showform')->show();
    }

    public function create()
    {
        $this->reset(['id', 'name', 'email', 'telefono', 'password', 'solicitud']);
        $this->activo = true;

        $this->modal('showform')->show();
    }

    public function confirm(User $item)
    {
        $this->id = $item->id;

        $this->modal('delete-profile')->show();
    }

    public function delete()
    {
        $item = User::find($this->id);

        if ($item->email === 'christianmamani587@gmail.com') {
            Flux::toast(
                heading: 'No se puede eliminar.',
                text: 'No puedes eliminar al administrador general.',
                variant: 'danger',
            );

            $this->modal('delete-profile')->close();

            return;
        }

        $item->delete();

        Flux::toast(
            heading: 'Administrador eliminado.',
            text: 'El administrador se ha eliminado correctamente.',
            variant: 'success',
        );

        $this->modal('delete-profile')->close();
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingFilterSolicitud(): void
    {
        $this->resetPage();
    }
}
