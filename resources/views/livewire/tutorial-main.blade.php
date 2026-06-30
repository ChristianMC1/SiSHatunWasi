<div>
    <h1 class="text-3xl mb-10 border-b-3 pb-1 border-violet-500">Gesti&oacute;n de tutoriales</h1>

    <div class="flex gap-2 mb-4">
        <flux:input wire:model.live="search" placeholder="Buscar tutorial..." icon="magnifying-glass"/>
        <flux:button wire:click="create()" variant="primary" color="violet" icon="plus">Nuevo</flux:button>
    </div>

    <flux:table>
        <flux:table.columns>
            <flux:table.column>ID</flux:table.column>
            <flux:table.column>T&Iacute;TULO</flux:table.column>
            <flux:table.column>DURACI&Oacute;N</flux:table.column>
            <flux:table.column>LINK</flux:table.column>
            <flux:table.column>OPCIONES</flux:table.column>
        </flux:table.columns>

        <flux:table.rows>
            @foreach ($tutoriales as $item)
                <flux:table.row>
                    <flux:table.cell>{{ $item->id }}</flux:table.cell>
                    <flux:table.cell class="font-medium whitespace-nowrap">{{ $item->titulo }}</flux:table.cell>
                    <flux:table.cell>{{ $item->duracion ?? '—' }}</flux:table.cell>
                    <flux:table.cell class="max-w-xs truncate">
                        <a href="{{ $item->url }}" target="_blank" rel="noopener noreferrer" class="text-violet-500 hover:text-violet-700 underline text-sm">
                            {{ $item->url }}
                        </a>
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
        {{ $tutoriales->links() }}
    </div>

    <flux:modal name="showform" flyout>
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">{{ $id ? 'Editar Tutorial' : 'Registrar Tutorial' }}</flux:heading>
            </div>

            <flux:input wire:model="titulo" label="Título" placeholder="Título del tutorial" />
            <flux:input wire:model="url" label="Link de YouTube" placeholder="https://www.youtube.com/watch?v=..." />
            <flux:input wire:model="duracion" label="Duración" placeholder="Ej: 12:30 (opcional)" />

            <div class="flex">
                <flux:spacer />
                <flux:button wire:click="save()" variant="primary" color="violet" icon="arrow-turn-down-right">Guardar</flux:button>
            </div>
        </div>
    </flux:modal>

    <flux:modal name="delete-profile" class="min-w-[22rem]">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">¿Eliminar tutorial?</flux:heading>
                <flux:text class="mt-2">
                    Esta acci&oacute;n no se puede revertir.
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
