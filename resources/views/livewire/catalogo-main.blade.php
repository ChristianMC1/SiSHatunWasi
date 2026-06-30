<div>
    <h1 class="text-3xl mb-10 border-b-3 pb-1 border-violet-500">Gestion de catalogos</h1>

    <div class="flex gap-2 mb-4">
        <flux:input wire:model.live="search" placeholder="Buscar por titulo..." icon="magnifying-glass"/>
        <flux:button wire:click="create()" variant="primary" color="violet" icon="plus">Nuevo</flux:button>
    </div>

    <flux:table>
        <flux:table.columns>
            <flux:table.column>ID</flux:table.column>
            <flux:table.column>TITULO</flux:table.column>
            <flux:table.column>ARCHIVO</flux:table.column>
            <flux:table.column>ORDEN</flux:table.column>
            <flux:table.column>ACTIVO</flux:table.column>
            <flux:table.column>OPCIONES</flux:table.column>
        </flux:table.columns>

        <flux:table.rows>
            @foreach ($catalogos as $item)
                <flux:table.row>
                    <flux:table.cell>{{ $item->id }}</flux:table.cell>
                    <flux:table.cell class="font-medium whitespace-nowrap">{{ $item->titulo }}</flux:table.cell>
                    <flux:table.cell>
                        @if ($item->archivo)
                            <a href="{{ asset('storage/' . $item->archivo) }}" target="_blank"
                               class="text-violet-400 hover:text-violet-300 underline text-sm">
                                Ver PDF
                            </a>
                        @else
                            <span class="text-zinc-400 text-sm">—</span>
                        @endif
                    </flux:table.cell>
                    <flux:table.cell>{{ $item->orden }}</flux:table.cell>
                    <flux:table.cell class="text-center">
                        <flux:badge size="sm" inset="top bottom" color="{{ $item->activo ? 'green' : 'red' }}">
                            {{ $item->activo ? 'SI' : 'NO' }}
                        </flux:badge>
                    </flux:table.cell>
                    <flux:table.cell>
                        <flux:button wire:click="edit({{$item}})" variant="primary" color="amber" icon="pencil" class="cursor-pointer"></flux:button>
                        <flux:button wire:click="confirm({{$item}})" variant="primary" color="red" icon="trash" class="cursor-pointer"></flux:button>
                    </flux:table.cell>
                </flux:table.row>
            @endforeach
        </flux:table.rows>
    </flux:table>

    <div>
        {{ $catalogos->links() }}
    </div>

    <flux:modal name="showform" flyout>
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">{{ $id ? 'Editar Catalogo' : 'Registrar Catalogo' }}</flux:heading>
            </div>

            <flux:input wire:model="titulo" label="Titulo" placeholder="Titulo del catalogo" />
            <div>
                <flux:label>Archivo PDF</flux:label>
                <flux:input wire:model="archivo" type="file" accept="application/pdf" />
                <flux:error class="mt-1" for="archivo"/>
            </div>
            <flux:textarea wire:model="descripcion" label="Descripcion" placeholder="Descripcion del catalogo (opcional)"/>
            <flux:input wire:model="orden" label="Orden" type="number" min="0" placeholder="0"/>
            <flux:checkbox wire:model="activo" label="Activo"/>

            <div class="flex">
                <flux:spacer />
                <flux:button wire:click="save()" variant="primary" color="violet" icon="arrow-turn-down-right">Guardar</flux:button>
            </div>
        </div>
    </flux:modal>

    <flux:modal name="delete-profile" class="min-w-[22rem]">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Eliminar catalogo?</flux:heading>
                <flux:text class="mt-2">
                    Esta accion no se puede revertir.
                </flux:text>
            </div>

            <div class="flex gap-2">
                <flux:spacer />
                <flux:modal.close>
                    <flux:button variant="ghost">Cancelar</flux:button>
                </flux:modal.close>
                <flux:button wire:click="delete()" variant="danger">Eliminar</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
