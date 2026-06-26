<div>

    <h1 class="text-3xl mb-10 border-b-3 pb-1 border-violet-500">
        Gestión de clientes
    </h1>

    <div class="flex gap-2 mb-4">

        <flux:input
            wire:model.live="search"
            placeholder="Buscar cliente"
            icon="magnifying-glass"/>

        <flux:button
            wire:click="create()"
            variant="primary"
            color="violet"
            icon="plus">

            Nuevo

        </flux:button>

    </div>

    <flux:table>

        <flux:table.columns>

            <flux:table.column>ID</flux:table.column>
            <flux:table.column>NOMBRE</flux:table.column>
            <flux:table.column>CORREO</flux:table.column>
            <flux:table.column>TELÉFONO</flux:table.column>
            <flux:table.column>ACTIVO</flux:table.column>
            <flux:table.column>OPCIONES</flux:table.column>

        </flux:table.columns>

        <flux:table.rows>

            @foreach ($clientes as $item)

                <flux:table.row>

                    <flux:table.cell>
                        {{$item->id}}
                    </flux:table.cell>

                    <flux:table.cell>
                        {{$item->nombre}}
                    </flux:table.cell>

                    <flux:table.cell>
                        {{$item->correo}}
                    </flux:table.cell>

                    <flux:table.cell>
                        {{$item->telefono}}
                    </flux:table.cell>

                    <flux:table.cell class="text-center">

                        <flux:badge
                            size="sm"
                            inset="top bottom"
                            color="{{$item->activo?'green':'red'}}">

                            {{$item->activo?"SI":"NO"}}

                        </flux:badge>

                    </flux:table.cell>

                    <flux:table.cell>

                        <flux:button
                            wire:click="edit({{$item}})"
                            variant="primary"
                            color="amber"
                            icon="pencil">
                        </flux:button>

                        <flux:button
                            wire:click="confirm({{$item}})"
                            variant="primary"
                            color="red"
                            icon="trash">
                        </flux:button>

                    </flux:table.cell>

                </flux:table.row>

            @endforeach

        </flux:table.rows>

    </flux:table>

    <div>
        {{$clientes->links()}}
    </div>

    <!-- MODAL -->

    <flux:modal name="showform" flyout>

        <div class="space-y-6">

            <div>
                <flux:heading size="lg">
                    Registrar Cliente
                </flux:heading>
            </div>

            <flux:input
                wire:model="nombre"
                label="Nombre cliente"
                placeholder="Christian"/>

            <flux:input
                wire:model="correo"
                label="Correo"
                placeholder="correo@gmail.com"/>

            <flux:input
                wire:model="telefono"
                label="Teléfono"
                placeholder="999999999"/>

            <flux:textarea
                wire:model="direccion"
                label="Dirección"/>

            <flux:checkbox
                wire:model="activo"
                label="Activo"/>

            <div class="flex">

                <flux:spacer />

                <flux:button
                    wire:click="save()"
                    variant="primary"
                    color="violet"
                    icon="arrow-turn-down-right">

                    Guardar

                </flux:button>

            </div>

        </div>

    </flux:modal>

    <!-- MODAL DELETE -->

    <flux:modal
        name="delete-profile"
        class="min-w-[22rem]">

        <div class="space-y-6">

            <div>

                <flux:heading size="lg">
                    ¿Borrar registro?
                </flux:heading>

                <flux:text class="mt-2">

                    You're about to delete this client.
                    <br>
                    This action cannot be reversed.

                </flux:text>

            </div>

            <div class="flex gap-2">

                <flux:spacer />

                <flux:modal.close>

                    <flux:button variant="ghost">
                        Cancel
                    </flux:button>

                </flux:modal.close>

                <flux:button
                    wire:click="delete()"
                    variant="danger">

                    Borrar registro

                </flux:button>

            </div>

        </div>

    </flux:modal>

</div>
