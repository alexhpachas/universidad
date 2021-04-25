<div>
    <x-buscadortabla.buscador :type="$type='Grupos'" />
    
    <div class="mt-2 mb-4">
        <x-jet-danger-button wire:click="$set('open',true)">+ USUARIO</x-jet-danger-button>
    </div>
    
    <table class="table w-full">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>                
            </tr>
        </thead>
        <tbody>
            @foreach ($ciclos as $ciclo)
                <tr>
                    <td>{{$ciclo->id}}</td>
                    <td>{{$ciclo->nombre}}</td>      
                    
                    <td class="float-right"><x-jet-danger-button wire:click="edit({{$ciclo->id}})" >EDITAR</x-jet-danger-button></td>
                                                  
                    
                    <td class="float-right"><x-jet-danger-button wire:click="eliminar({{$ciclo->id}})">ELIMINAR</x-jet-danger-button></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- MODAL PARA CREAR NUEVO CICLO --}}

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            <div class="text-center border-gray-700 border-b-2">
                CREAR REGISTRO
            </div>
        </x-slot>

        <x-slot name="content">
            <div>
                <x-jet-label value="Nombre del Ciclo" />
                <x-jet-input wire:model.defer="nombre" type="text" class="form-control" placeholder="Nombre del Ciclo" />

                <x-jet-input-error for="nombre" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-danger-button wire:click="guardar">
                CREAR CICLO
            </x-jet-danger-button>

            <x-jet-secondary-button wire:click="$set('open',false)">
                CANCELAR
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>


    {{-- MODAL PARA EDITAR UN CICLO --}}

    <x-jet-dialog-modal wire:model="openE">
        <x-slot name="title">
            <div class="text-center border-gray-700 border-b-2">
                ACTUALIZAR REGISTRO
            </div>
        </x-slot>

        <x-slot name="content">
            <div>                
                <x-jet-label value="Nombre del Ciclo" />
                <x-jet-input wire:model.defer="nombre_ciclo" type="text" class="form-control" placeholder="Nombre del Ciclo" />
                
                
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-danger-button wire:click="actualizar">
                ACTUALIZAR
            </x-jet-danger-button>

            <x-jet-secondary-button wire:click="$set('openE',false)">
                CANCELAR
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
