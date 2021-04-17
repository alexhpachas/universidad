<div>
    <svg wire:click="$set('open',true)" class="cursor-pointer focus:outline-none w-7 mr-2 border-gray-900 bg-yellow-500 text-white border rounded-lg p-1 transform hover:text-purple-500 hover:bg-yellow-700 hover:scale-110" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
    </svg>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            <div class="text-center border-gray-700 border-b-2">
                ACTUALIZAR PERSONA
            </div>
        </x-slot>

        <x-slot name="content">
            <div class="mb-0">
                <x-jet-label value="Nombres :" />
                <x-jet-input wire:model="persona.nombres" class="form-control" type="text" value="{{ old('nombres') }}" placeholder="ejemplo: ALEX GABRIEL" />
                
                <x-jet-input-error for="persona.nombres" />
            </div>    
            <div class="mb-0">
                <x-jet-label value="Apellidos :" />
                <x-jet-input wire:model="persona.apellidos" class="form-control" type="text" placeholder="Ejemplo: HUAMAN PACHAS" />
                
                <x-jet-input-error for="persona.apellidos" />
            </div>           
            <div class="mb-0">
                <x-jet-label value="Dni :" />
                <x-jet-input wire:model="persona.dni" class="form-control" type="number" placeholder="Ejemplo: 47364052" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
                
                <x-jet-input-error for="persona.dni" />
            </div> 
            <div class="mb-0">
                <x-jet-label value="Fecha de Nacimiento :" />
                <x-jet-input wire:model="persona.fecha_nacimiento" class="form-control" type="date" placeholder="Ejemplo: 12-12-1912" />
                
                <x-jet-input-error for="persona.fecha_nacimiento" />
            </div> 
            <div class="mb-0">
                <x-jet-label value="Email :" />
                <x-jet-input wire:model="persona.email" class="form-control" type="email" id="email" placeholder="Ejemplo : Alex.Pachas@gmail.com" />
                
                <x-jet-input-error for="persona.email" />
            </div>
            <div>
                <x-jet-label value="Genero :" />
                <select wire:model="persona.genero"  class="form-control">                    
                    <option selected value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
                
                
                <x-jet-input-error for="persona.genero" />
            </div>             
        </x-slot>

        <x-slot name="footer">
            <div>
                <x-jet-danger-button wire:click="actualizar" wire:loading.attr="disabled">
                    ACTUALIZAR
                </x-jet-danger-button>

                <x-jet-secondary-button wire:click="$set('open',false)">
                    CANCELAR
                </x-jet-secondary-button>
            </div>            
        </x-slot>
    </x-jet-dialog-modal>
</div>
