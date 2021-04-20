<div>
    
    {{-- BOTON CREAR NUEVA ENTIDAD --}}
    <x-jet-danger-button wire:click="$set('open',true)">
        Crear Persona
    </x-jet-danger-button>  

    {{-- MODAL PARA CREAR NUEVA ENTIDAD --}}
    <x-jet-dialog-modal wire:model='open'>

        {{-- TITULO DEL MODAL --}}
        <x-slot name="title">
            <div class="text-center border-gray-700 border-b-2">
                CREAR NUEVO PERSONA
            </div>
        </x-slot>

        {{-- CONTENIDO DEL MODAL --}}
        <x-slot name="content">
            <div class="mb-1">
                <x-jet-label value="Nombres :" />
                <x-jet-input wire:model.defer="nombres" class="form-control" type="text" value="{{ old('nombres') }}" placeholder="ejemplo: ALEX GABRIEL" />
                
                <x-jet-input-error for="nombres" />
            </div>    
            <div class="mb-1">
                <x-jet-label value="Apellidos :" />
                <x-jet-input wire:model.defer="apellidos" class="form-control" type="text" placeholder="Ejemplo: HUAMAN PACHAS" />
                
                <x-jet-input-error for="apellidos" />
            </div>           
            <div class="mb-1">
                <x-jet-label value="Dni :" />
                <x-jet-input wire:model.defer="dni" class="form-control" type="number" placeholder="Ejemplo: 47364052" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" /><i>(Máximo 8 dígitos)</i>
                
                <x-jet-input-error for="dni" />
            </div> 
            <div class="mb-1">
                <x-jet-label value="Fecha de Nacimiento :" />
                <x-jet-input wire:model.defer="fecha_nacimiento" class="form-control" type="date" placeholder="Ejemplo: 12-12-1912" />
                
                <x-jet-input-error for="fecha_nacimiento" />
            </div> 
            <div class="mb-1">
                <x-jet-label value="Email :" />
                <x-jet-input wire:model.defer="email" class="form-control" type="email" id="email" placeholder="Ejemplo : Alex.Pachas@gmail.com" />
                
                <x-jet-input-error for="email" />
            </div>
            <div class="mb-1">
                <x-jet-label value="Genero :" />
                <select wire:model.defer="genero"  class="form-control">                    
                    <option selected value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
                
                
                <x-jet-input-error for="genero" />
            </div> 
            
        </x-slot>

        {{-- PIE DE PAGINA DEL MODAL --}}
        <x-slot name="footer">
            <div>
                <x-jet-danger-button wire:click="guardar">
                    Crear Persona
                </x-jet-danger-button>

                <x-jet-secondary-button wire:click="$set('open',false)">
                    Cancelar
                </x-jet-secondary-button>
            </div>            
        </x-slot>
    </x-jet-dialog-modal>
    
</div>
