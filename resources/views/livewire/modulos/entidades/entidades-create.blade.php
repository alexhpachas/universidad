<div>
    
    {{-- BOTON CREAR NUEVA ENTIDAD --}}
    <x-jet-danger-button wire:click="$set('open',true)">
        Crear Entidad
    </x-jet-danger-button>  

    {{-- MODAL PARA CREAR NUEVA ENTIDAD --}}
    <x-jet-dialog-modal wire:model='open'>

        {{-- TITULO DEL MODAL --}}
        <x-slot name="title">
            <div class="text-center border-gray-700 border-b-2">
                CREAR NUEVA ENTIDAD
            </div>
        </x-slot>

        {{-- CONTENIDO DEL MODAL --}}
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Nombre Entidad :" />
                <x-jet-input wire:model.defer="nombre" class="form-control uppercase" type="text" placeholder="Ingrese nombre de la entidad" />
                
                <x-jet-input-error for="nombre" />
            </div>            
        </x-slot>

        {{-- PIE DE PAGINA DEL MODAL --}}
        <x-slot name="footer">
            <div>
                <x-jet-danger-button wire:click="guardar">
                    Crear Entidad
                </x-jet-danger-button>

                <x-jet-secondary-button wire:click="cancelar">
                    Cancelar
                </x-jet-secondary-button>
            </div>            
        </x-slot>
    </x-jet-dialog-modal>
    
</div>
