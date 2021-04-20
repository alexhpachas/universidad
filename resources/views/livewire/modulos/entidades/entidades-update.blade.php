<div>
    <svg wire:click="$set('open',true)" class="cursor-pointer focus:outline-none w-7 mr-2 border-gray-900 bg-yellow-500 text-white border rounded-lg p-1 transform hover:text-purple-500 hover:bg-yellow-700 hover:scale-110" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
    </svg> 
    
    <x-jet-dialog-modal wire:model='open'>
        <x-slot name="title">
            <div class="text-center border-gray-700 border-b-2">
                ACTUALIZAR ENTIDAD
            </div>

        </x-slot>

        <x-slot name="content">
            <div class="b-1">
                <x-jet-label value="Nombre de Entidad" />
                <x-jet-input wire:model="entidade.nombre" type="text" class="form-control uppercase" placeholder="Ingrese el nombre de la Entidad" />
            </div>   
            
            <x-jet-input-error for="entidade.nombre" />
        </x-slot>

        <x-slot name="footer">
            <x-jet-danger-button wire:click="actualizar">
                ACTUALIZAR
            </x-jet-danger-button>

            <x-jet-secondary-button wire:click="$set('open',false)">
                CANCELAR
            </x-jet-secondary-button>
            
        </x-slot>
    </x-jet-dialog-modal>
</div>
