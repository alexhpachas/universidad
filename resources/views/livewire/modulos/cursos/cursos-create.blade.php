<div>
    <x-jet-danger-button wire:click="$set('open',true)">
        NUEVO CURSO
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            <div class="text-center border-gray-700 border-b-2">
                CREAR NUEVO CURSO
            </div>
        </x-slot>

        <x-slot name="content">
            <div class="mb-1">
                <x-jet-label value="Codigo del curso" />
                <x-jet-input wire:model.defer="codigo" type="text" class="form-control" placeholder="Ingrese codigo del curso" />                

                <x-jet-input-error for="codigo" />
            </div>

            <div class="mb-1">
                <x-jet-label value="Nombre del curso" />
                <x-jet-input wire:model.defer="nombre" type="text" class="form-control" placeholder="Ingrese nombre del curso" />                

                <x-jet-input-error for="nombre" />
            </div>

            <div class="mb-1">
                <x-jet-label value="Horas Teoricas" />
                <x-jet-input wire:model.defer="horas_teoricas" type="text" class="form-control" placeholder="Ingrese horas Teoricas del curso" />                
                
                <x-jet-input-error for="horas_teoricas" />
            </div>

            <div class="mb-1">
                <x-jet-label value="Horas Practicas" />
                <x-jet-input wire:model.defer="horas_practicas" type="text" class="form-control" placeholder="Ingrese horas practicas del curso" />                
                
                <x-jet-input-error for="horas_practicas" />
            </div>

            <div class="mb-1">
                <x-jet-label value="Creditos del curso" />
                <x-jet-input wire:model.defer="creditos" type="text" class="form-control" placeholder="Ingrese credito del curso" />                

                <x-jet-input-error for="creditos" />
            </div>

            <div class="mb-1">
                <x-jet-label value="Tipo del curso" />
                <x-jet-input wire:model.defer="tipo" type="text" class="form-control" placeholder="Ingrese credito del curso" />                

                <x-jet-input-error for="tipo" />
            </div>

            <div class="mb-1">
                <x-jet-label value="Seleccione Programa del curso" />

                <select wire:model.defer="programa_id" class="form-control">
                    @foreach ($programas as $programa)
                        <option value="{{$programa->id}}">{{$programa->nombre}}</option>                        
                    @endforeach                    
                </select>           

                <x-jet-input-error for="programa_id" />

            </div>

            <div class="mb-1">
                <x-jet-label value="Seleccione Plan de Estudios" />

                <select wire:model.defer="plan_estudio_id" class="form-control">
                    @foreach ($planEstudios as $planEstudio)
                        <option value="{{$planEstudio->id}}">{{$planEstudio->codigo}}</option>
                    @endforeach
                </select>   
                
                <x-jet-input-error for="plan_estudio_id" />
            </div>

            <div class="mb-1">
                <x-jet-label value="Seleccione Ciclo" />
                
                <select wire:model.defer="ciclo_id" class="form-control" >                    
                    @foreach ($ciclos as $ciclo)
                        <option value="{{$ciclo->id}}">{{$ciclo->nombre}}</option>                        
                    @endforeach
                </select>

                <x-jet-input-error for="ciclo_id" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-danger-button wire:click="guardar" wire:loading.attr="disabled" class="disabled:opacity-25">
                CREAR CURSO
            </x-jet-danger-button>
            <x-jet-secondary-button wire:click="$set('open',false)">
                CANCELAR
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
