<div>
    
    {{-- BOTON CREAR NUEVA ENTIDAD --}}
    <x-jet-danger-button wire:click="$set('open',true)">
        Crear Facultad
    </x-jet-danger-button>  

    {{-- MODAL PARA CREAR NUEVA ENTIDAD --}}
    <x-jet-dialog-modal wire:model='open'>

        {{-- TITULO DEL MODAL --}}
        <x-slot name="title">
            <div class="text-center border-gray-700 border-b-2">
                CREAR NUEVA FACULTAD
            </div>
        </x-slot>

        {{-- CONTENIDO DEL MODAL --}}
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Nombre de la Facultad :" />
                <x-jet-input wire:model.defer="nombre" class="form-control" type="text" placeholder="Ingrese nombre de la facultad" />
                
                <x-jet-input-error for="nombre" />
            </div>            

            <div class="mb-4">
                <x-jet-label value="Codigo de la Facultad :" />
                <x-jet-input wire:model.defer="codigo" class="form-control" type="text" placeholder="Ingrese codigo de la facultad" />
                
                <x-jet-input-error for="codigo" />
            </div>            
      
            <div class="mb-4">
                <x-jet-label value="Abreviatura de la Facultad :" />
                <x-jet-input wire:model.defer="abreviatura" class="form-control" type="text" placeholder="Ingrese abreviatura de la facultad" />
                
                <x-jet-input-error for="abreviatura" />
            </div>   

            <div class="mb-4">
                <x-jet-label value="Entidad :" />
                
                <select wire:model="entidade_id" class="form-control">                        
                    @foreach ($entidades as $entidade)
                        <option value="{{$entidade->id}}">{{$entidade->nombre}}</option>
                    @endforeach
                </select>
                
                <x-jet-input-error for="entidade_id" />
            </div>   
        </x-slot>

      
                     
      

        {{-- PIE DE PAGINA DEL MODAL --}}
        <x-slot name="footer">
            <div>
                <x-jet-danger-button wire:click="guardar" wire:loading.attr="disabled">
                    CREAR FACULTAD
                </x-jet-danger-button>

                <x-jet-secondary-button wire:click="$set('open',false)">
                    CANCELAR
                </x-jet-secondary-button>
            </div>            
        </x-slot>
    </x-jet-dialog-modal>
    
</div>
