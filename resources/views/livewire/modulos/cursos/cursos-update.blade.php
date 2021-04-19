<div>
    <svg wire:click="$set('open',true)" class="cursor-pointer focus:outline-none w-7 mr-2 border-gray-900 bg-yellow-500 text-white border rounded-lg p-1 transform hover:text-purple-500 hover:bg-yellow-700 hover:scale-110" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
    </svg>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            <div class="text-center border-gray-700 border-b-2">
                ACTUALIZAR CURSO
            </div>
        </x-slot>

        <x-slot name="content">
            <div class="mb-1">
                <x-jet-label value="Codigo del curso" />
                <x-jet-input wire:model="curso.codigo" type="text" class="form-control" placeholder="Ingrese codigo del curso" />                

                <x-jet-input-error for="curso.codigo" />
            </div>

            <div class="mb-1">
                <x-jet-label value="Nombre del curso" />
                <x-jet-input wire:model="curso.nombre" type="text" class="form-control" placeholder="Ingrese nombre del curso" />                

                <x-jet-input-error for="curso.nombre" />
            </div>

            <div class="mb-1">
                <x-jet-label value="Horas Teoricas" />
                <x-jet-input wire:model="curso.horas_teoricas" type="text" class="form-control" placeholder="Ingrese horas Teoricas del curso" />                
                
                <x-jet-input-error for="curso.horas_teoricas" />
            </div>

            <div class="mb-1">
                <x-jet-label value="Horas Practicas" />
                <x-jet-input wire:model="curso.horas_practicas" type="text" class="form-control" placeholder="Ingrese horas practicas del curso" />                
                
                <x-jet-input-error for="curso.horas_practicas" />
            </div>

            <div class="mb-1">
                <x-jet-label value="Creditos del curso" />
                <x-jet-input wire:model="curso.creditos" type="text" class="form-control" placeholder="Ingrese credito del curso" />                

                <x-jet-input-error for="curso.creditos" />
            </div>

            <div class="mb-1">
                <x-jet-label value="Seleccione Tipo" />

                <select wire:model="curso.tipo" class="form-control">
                    <option value="OBLIGATORIO">OBLIGATORIO</option>
                    <option value="ELECTIVO">ELECTIVO</option>
                </select>
            </div>

            {{-- <div class="mb-1">
                <x-jet-label value="Tipo del curso" />
                <x-jet-input wire:model="curso.tipo" type="text" class="form-control" placeholder="Ingrese credito del curso" />                

                <x-jet-input-error for="curso.tipo" />
            </div> --}}

            {{-- <div class="mb-1">
                <x-jet-label value="Seleccione Programa del curso" />

                <select wire:model="curso.programa_id" class="form-control">
                    @foreach ($programas as $programa)
                        <option value="{{$programa->id}}">{{$programa->nombre}}</option>                        
                    @endforeach                    
                </select>           

                <x-jet-input-error for="curso.programa_id" />

            </div>

            <div class="mb-1">
                <x-jet-label value="Seleccione Plan de Estudios" />

                <select wire:model="curso.plan_estudio_id" class="form-control">
                    @foreach ($planEstudios as $planEstudio)
                        <option value="{{$planEstudio->id}}">{{$planEstudio->codigo}}</option>
                    @endforeach
                </select>   
                
                <x-jet-input-error for="curso.plan_estudio_id" />
            </div>

            <div class="mb-1">
                <x-jet-label value="Seleccione Ciclo" />
                
                <select wire:model="curso.ciclo_id" class="form-control" >                    
                    @foreach ($ciclos as $ciclo)
                        <option value="{{$ciclo->id}}">{{$ciclo->nombre}}</option>                        
                    @endforeach
                </select>

                <x-jet-input-error for="curso.ciclo_id" />
            </div> --}}
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
