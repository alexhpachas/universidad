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
                <x-jet-label value="Modalidad" />                                                                      
                <x-jet-input type="text" value="REGULAR" class="form-control" disabled />                
            </div>
            

            {{-- FACULTAD ID ->  SOLO PARA MOSTRAR--}}
            <div class="mb-1">
                <x-jet-label value="Facultad :" />                                  
                    <select wire:model.defer="programa" class="form-control" disabled>
                        <option value="{{$cursoPlane->planEstudio->programa->facultade->id}}">{{$cursoPlane->planEstudio->programa->facultade->nombre}}</option>
                    </select>                                                                                                                                        
            </div>

            {{-- NOMBRE DEL PROGRAMA -> SOLO PARA MOSTRAR  --}}
            <div class="mb-1">
                <x-jet-label value="Programa" />                                 
                    <select wire:model.defer="programa" class="form-control" disabled>
                        <option value="{{$cursoPlane->planEstudio->programa->id}}">{{$cursoPlane->planEstudio->programa->nombre}}</option>
                    </select>                                                                                
            </div>

            {{-- PLAN ESTUDIO ID --}}
            <div class="mb-1">
                <x-jet-label value="Periodo" />
                <select  class="form-control">                                                                                  
                        <option value="{{$cursoPlane->planEstudio->id}}">{{$cursoPlane->planEstudio->codigo}}</option>                    
                </select>                
            </div>
            {{-- {{$cursoPlane->planEstudio->programa->facultade->nombre}} --}}
            {{-- CURSO ID --}}
            
            <div class="mb-1">
                <x-jet-label value="Seleccione Curso" />
                <select wire:model="cursoPlane.curso_id" class="form-control">                                        
                    @foreach ($cursos as $curso)                        
                        <option selected value="{{$curso->id}}">{{$curso->nombre}}</option>
                    @endforeach
                </select>
                
            </div>
            {{-- {{$cursoPlane->curso->nombre}}
            {{$cursoPlane->curso->id}} --}}

            {{-- CICLO ID --}}
            <div class="mb-1">
                
                <x-jet-label value="Seleccione Ciclo" />
                <select wire:model.defer="cursoPlane.ciclo_id" class="form-control">                    
                    @foreach ($ciclos as $ciclo)
                        <option value="{{$ciclo->id}}">{{$ciclo->nombre}}</option>
                    @endforeach
                </select>
            </div>
            
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
