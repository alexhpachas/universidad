<div>
    
    {{-- BOTON CREAR NUEVA ENTIDAD --}}
    <x-jet-danger-button wire:click="$set('open',true)">
        Crear Plan Estudios
    </x-jet-danger-button>  

    {{-- MODAL PARA CREAR NUEVA ENTIDAD --}}
    <x-jet-dialog-modal wire:model='open'>

        {{-- TITULO DEL MODAL --}}
        <x-slot name="title">
            <div class="text-center border-gray-700 border-b-2">
                CREAR NUEVO PLAN ESTUDIOS
            </div>
        </x-slot>

        {{-- CONTENIDO DEL MODAL --}}
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Nombre del Plan Estudios :" />
                <x-jet-input wire:model.defer="codigo" class="form-control" type="text" placeholder="Ingrese nombre del plan Estudios" />
                
                <x-jet-input-error for="codigo" />
            </div>            
        </x-slot>

        {{-- PIE DE PAGINA DEL MODAL --}}
        <x-slot name="footer">
            <div>
                <x-jet-danger-button wire:click="guardar">
                    Crear Plan Estudios
                </x-jet-danger-button>

                <x-jet-secondary-button wire:click="$set('open',false)">
                    Cancelar
                </x-jet-secondary-button>
            </div>            
        </x-slot>
    </x-jet-dialog-modal>
    
</div>

