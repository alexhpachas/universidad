<div>
    <x-jet-danger-button wire:click="$set('open',true)">
        NUEVO PROGRAMA
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            <div class="text-center border-gray-700 border-b-2">
                CREAR PROGRAMA
            </div>

        </x-slot>

        <x-slot name="content">
            <div>
                <div class="mb-4">
                    <x-jet-label value="Nombre del Programa :" />
                    <x-jet-input wire:model.defer="nombre" class="form-control" type="text" placeholder="Ingrese nombre del programa" />
                    
                    <x-jet-input-error for="nombre" />
                </div>            
    
                <div class="mb-4">
                    <x-jet-label value="Codigo del Programa :" />
                    <x-jet-input wire:model.defer="codigo" class="form-control" type="text" placeholder="Ingrese codigo del programa" />
                    
                    <x-jet-input-error for="codigo" />
                </div>            
          
                <div class="mb-4">
                    <x-jet-label value="Abreviatura del Programa :" />
                    <x-jet-input wire:model.defer="abreviatura" class="form-control" type="text" placeholder="Ingrese abreviatura del programa" />
                    
                    <x-jet-input-error for="abreviatura" />
                </div>   
    
                <div class="mb-4">
                    <x-jet-label value="Seleccione Facultad :" />
                    
                    <select wire:model="facultade_id" class="form-control">                        
                        @foreach ($facultades as $facultade)
                            <option value="{{$facultade->id}}">{{$facultade->nombre}}</option>
                        @endforeach

                    </select>
                    {{$facultade_id}}
                    <x-jet-input-error for="facultade_id" />
                </div>  
            </div>
            
        </x-slot>

        <x-slot name="footer">
            <x-jet-danger-button wire:click="guardar">
                CREAR PROGRAMA
            </x-jet-danger-button>
            
            <x-jet-secondary-button wire:click="$set('open',false)">
                CANCELAR
            </x-jet-secondary-button>
        </x-slot>

    </x-jet-dialog-modal>
</div>
