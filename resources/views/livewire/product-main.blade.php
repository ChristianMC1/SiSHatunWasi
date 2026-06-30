<div>
    <h1 class="text-3xl mb-10 border-b-3 pb-1 border-violet-500">Gesti&oacute;n de productos</h1>
    <div class="flex gap-2 mb-4">
        <flux:input wire:model.live="search" placeholder="Buscar producto, c&oacute;digo o marca..." icon="magnifying-glass"/>
        <flux:select wire:model.live="filterCategory" class="min-w-48">
            <flux:select.option value="">Todas las categor&iacute;as</flux:select.option>
            @foreach ($categorias as $cat)
                <flux:select.option value="{{ $cat->slug }}">{{ $cat->slug }}</flux:select.option>
            @endforeach
        </flux:select>
        <flux:button wire:click="create()" variant="primary" color="violet" icon="plus">Nuevo</flux:button>
    </div>
    <flux:table>
        <flux:table.columns>
            <flux:table.column>ID</flux:table.column>
            <flux:table.column>NOMBRE</flux:table.column>
            <flux:table.column>DESCRIPCI&Oacute;N</flux:table.column>
            <flux:table.column>C&Oacute;DIGO</flux:table.column>
            <flux:table.column>MEDIDAS</flux:table.column>
            <flux:table.column>MARCA</flux:table.column>
            <flux:table.column>CATEGOR&Iacute;A</flux:table.column>
            <flux:table.column>AMBIENTES</flux:table.column>
            <flux:table.column>CANT</flux:table.column>
            <flux:table.column>PRECIO</flux:table.column>
            <flux:table.column>DISP</flux:table.column>
            <flux:table.column>OPCIONES</flux:table.column>
        </flux:table.columns>

        <flux:table.rows>
            @foreach ($productos as $item)
                <flux:table.row>
                    <flux:table.cell>{{ $item->id }}</flux:table.cell>
                    <flux:table.cell class="whitespace-nowrap font-medium">{{ $item->nombre }}</flux:table.cell>
                    <flux:table.cell class="max-w-xs truncate" title="{{ $item->descripcion }}">{{ Str::limit($item->descripcion, 60) }}</flux:table.cell>
                    <flux:table.cell>{{ $item->codigo ?? '—' }}</flux:table.cell>
                    <flux:table.cell>{{ $item->medidas ?? '—' }}</flux:table.cell>
                    <flux:table.cell>{{ $item->marca ?? '—' }}</flux:table.cell>
                    <flux:table.cell>
                        <flux:badge size="sm" inset="top bottom" color="violet">
                            {{ $item->category->slug ?? 'Sin categor&iacute;a' }}
                        </flux:badge>
                    </flux:table.cell>
                    <flux:table.cell>
                        <div class="flex flex-wrap gap-1">
                            @forelse ($item->ambientes as $amb)
                                <flux:badge size="sm" inset="top bottom" color="emerald">{{ $amb->nombre }}</flux:badge>
                            @empty
                                <span class="text-xs text-gray-400">—</span>
                            @endforelse
                        </div>
                    </flux:table.cell>
                    <flux:table.cell>{{ $item->cantidad }}</flux:table.cell>
                    <flux:table.cell variant="strong" class="text-right">S/. {{ number_format($item->precio, 2) }}</flux:table.cell>
                    <flux:table.cell class="text-center">
                        <flux:badge size="sm" inset="top bottom" color="{{ $item->disponible ? 'green' : 'red' }}">
                            {{ $item->disponible ? 'SI' : 'NO' }}
                        </flux:badge>
                    </flux:table.cell>
                    <flux:table.cell>
                        <flux:button wire:click="openUpload({{ $item }})" icon="photo" class="cursor-pointer"></flux:button>
                        <flux:button wire:click="edit({{ $item }})" variant="primary" color="amber" icon="pencil" class="cursor-pointer"></flux:button>
                        <flux:button wire:click="confirm({{ $item }})" variant="primary" color="red" icon="trash" class="cursor-pointer"></flux:button>
                    </flux:table.cell>
                </flux:table.row>
            @endforeach
        </flux:table.rows>
    </flux:table>
    <div>
        {{ $productos->links() }}
    </div>

    {{-- CREATE / EDIT MODAL --}}
    <flux:modal name="showform" flyout>
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">{{ $id ? 'Editar Producto' : 'Registrar Producto' }}</flux:heading>
            </div>
            <flux:input wire:model="nombre" label="Nombre producto" placeholder="Nombre del producto" />
            <flux:textarea wire:model="descripcion" label="Descripci&oacute;n" placeholder="Descripci&oacute;n detallada del producto"/>
            <div class="grid grid-cols-3 gap-3">
                <flux:input wire:model="codigo" label="C&oacute;digo" placeholder="Ej: LFG 66018"/>
                <flux:input wire:model="medidas" label="Medidas" placeholder="Ej: 60x60 cm"/>
                <flux:input wire:model="marca" label="Marca" placeholder="Ej: Porcelatino"/>
            </div>
            <flux:select wire:model="category_id" label="Categor&iacute;a" placeholder="Seleccionar categor&iacute;a">
                @foreach ($categorias as $cat)
                    <flux:select.option value="{{ $cat->id }}">{{ $cat->slug }}</flux:select.option>
                @endforeach
            </flux:select>

            {{-- Ambientes Multi-Select --}}
            <div>
                <label class="block text-sm font-medium mb-2 text-zinc-600">Ambientes</label>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-2">
                    @foreach ($allAmbientes as $amb)
                        <label class="flex items-center gap-2 px-3 py-2 rounded-lg border cursor-pointer transition-all duration-200
                                      {{ in_array((string) $amb->id, (array) $this->ambientes, true) || in_array($amb->id, array_map('intval', (array) $this->ambientes)) ? 'border-violet-400 bg-violet-50' : 'border-zinc-200 hover:border-zinc-300' }}">
                            <input type="checkbox" wire:model="ambientes" value="{{ $amb->id }}"
                                   class="rounded text-violet-600 focus:ring-violet-500">
                            <span class="text-sm font-medium text-zinc-700">{{ $amb->nombre }}</span>
                        </label>
                    @endforeach
                </div>
            </div>

            <div class="grid grid-cols-2 gap-3">
                <flux:input wire:model="cantidad" label="Cantidad" placeholder="12" type="number"/>
                <flux:input wire:model="precio" label="Precio" placeholder="45.50" type="number" step="0.01"/>
            </div>
            <flux:checkbox wire:model="disponible" label="Disponible"/>
            <div class="flex">
                <flux:spacer />
                <flux:button wire:click="save()" variant="primary" color="violet" icon="arrow-turn-down-right">Guardar</flux:button>
            </div>
        </div>
    </flux:modal>

    {{-- DELETE MODAL --}}
    <flux:modal name="delete-profile" class="min-w-[22rem]">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Opciones de borrado</flux:heading>
                <flux:text class="mt-2">Selecciona el tipo de borrado para este producto.</flux:text>
            </div>
            <div class="flex flex-col gap-2">
                <flux:button wire:click="delete()" variant="primary" color="orange" class="w-full cursor-pointer">
                    Deshabilitar ( reversible )
                </flux:button>
                <flux:button wire:click="deletePermanent()" variant="danger" class="w-full cursor-pointer">
                    Eliminar definitivamente
                </flux:button>
            </div>
            <div class="flex justify-end">
                <flux:modal.close>
                    <flux:button variant="ghost">Cancelar</flux:button>
                </flux:modal.close>
            </div>
        </div>
    </flux:modal>

    {{-- UPLOAD MODAL --}}
    <flux:modal name="showUpload" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Im&aacute;genes del producto</flux:heading>
            </div>
            @if($productSelectedId)
                @livewire('image-uploader', ['model' => \App\Models\Product::find($productSelectedId)], key($productSelectedId))
            @endif
        </div>
    </flux:modal>
</div>
