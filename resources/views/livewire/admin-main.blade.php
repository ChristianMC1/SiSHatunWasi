<div>
    <h1 class="text-3xl mb-10 border-b-3 pb-1 border-violet-500">Gestion de administradores</h1>

    <div class="flex gap-2 mb-4">
        <flux:input wire:model.live="search" placeholder="Buscar por nombre, correo o telefono..." icon="magnifying-glass"/>
        <flux:select wire:model.live="filterSolicitud" class="min-w-48">
            <flux:select.option value="">Todas las solicitudes</flux:select.option>
            <flux:select.option value="con">Con solicitud</flux:select.option>
            <flux:select.option value="sin">Sin solicitud</flux:select.option>
        </flux:select>
        <flux:button wire:click="create()" variant="primary" color="violet" icon="plus">Nuevo</flux:button>
    </div>

    <flux:table>
        <flux:table.columns>
            <flux:table.column>ID</flux:table.column>
            <flux:table.column>NOMBRE</flux:table.column>
            <flux:table.column>CORREO</flux:table.column>
            <flux:table.column>CONTRASEÑA</flux:table.column>
            <flux:table.column>TELEFONO</flux:table.column>
            <flux:table.column>ACTIVO</flux:table.column>
            <flux:table.column>SOLICITUD</flux:table.column>
            <flux:table.column>OPCIONES</flux:table.column>
        </flux:table.columns>

        <flux:table.rows>
            @foreach ($admins as $item)
                <flux:table.row>
                    <flux:table.cell>{{ $item->id }}</flux:table.cell>
                    <flux:table.cell class="font-medium whitespace-nowrap">{{ $item->name }}</flux:table.cell>
                    <flux:table.cell>{{ $item->email }}</flux:table.cell>
                    <flux:table.cell>
                        @if ($item->plain_password)
                            <div x-data="{ showPass: false }" class="flex items-center gap-2 font-mono text-sm">
                                <span x-show="!showPass" class="text-zinc-400 select-all">••••••••</span>
                                <span x-show="showPass" class="text-white select-all">{{ $item->plain_password }}</span>
                                <button @click="showPass = !showPass" type="button" class="text-zinc-400 hover:text-zinc-600 transition-colors">
                                    <svg x-show="!showPass" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                    <svg x-show="showPass" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
                                    </svg>
                                </button>
                            </div>
                        @else
                            <span class="text-zinc-400 font-mono text-sm">—</span>
                        @endif
                    </flux:table.cell>
                    <flux:table.cell>{{ $item->telefono ?? '—' }}</flux:table.cell>
                    <flux:table.cell class="text-center">
                        <flux:badge size="sm" inset="top bottom" color="{{ $item->activo ? 'green' : 'red' }}">
                            {{ $item->activo ? 'SI' : 'NO' }}
                        </flux:badge>
                    </flux:table.cell>
                    <flux:table.cell class="max-w-xs">
                        @if ($item->solicitud)
                            <span class="text-xs text-zinc-600 line-clamp-2">{{ $item->solicitud }}</span>
                        @else
                            <span class="text-xs text-zinc-400">—</span>
                        @endif
                    </flux:table.cell>
                    <flux:table.cell>
                        <flux:button wire:click="edit({{$item}})" variant="primary" color="amber" icon="pencil" class="cursor-pointer"></flux:button>
                        @if ($item->email !== 'christianmamani587@gmail.com')
                            <flux:button wire:click="confirm({{$item}})" variant="primary" color="red" icon="trash" class="cursor-pointer"></flux:button>
                        @endif
                    </flux:table.cell>
                </flux:table.row>
            @endforeach
        </flux:table.rows>
    </flux:table>

    <div>
        {{ $admins->links() }}
    </div>

    <flux:modal name="showform" flyout>
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">{{ $id ? 'Editar Administrador' : 'Registrar Administrador' }}</flux:heading>
            </div>

            <flux:input wire:model="name" label="Nombre completo" placeholder="Nombre completo" />
            <div class="grid grid-cols-2 gap-3">
                <flux:input wire:model="email" label="Correo electronico" placeholder="correo@ejemplo.com" type="email"/>
                <flux:input wire:model="telefono" label="Telefono" placeholder="+51 999 999 999"/>
            </div>
            <div x-data="{ showPass: false }" class="relative">
                <flux:input wire:model="password" x-bind:type="showPass ? 'text' : 'password'" label="Contraseña" placeholder="{{ $id ? 'Dejar vacio para mantener actual' : 'Minimo 8 caracteres' }}" />
                <button @click="showPass = !showPass" type="button"
                        class="absolute right-3 top-[38px] text-zinc-400 hover:text-zinc-600 transition-colors">
                    <svg x-show="!showPass" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                    <svg x-show="showPass" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
                    </svg>
                </button>
            </div>
            <flux:textarea wire:model="solicitud" label="Solicitud" placeholder="Motivo de la solicitud (opcional)"/>
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
                <flux:heading size="lg">Eliminar administrador?</flux:heading>
                <flux:text class="mt-2">
                    Esta accion no se puede revertir. El administrador perdera todo acceso al sistema.
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
