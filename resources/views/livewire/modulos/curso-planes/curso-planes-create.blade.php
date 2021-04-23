<div>
    {{-- <i class="fa fa-flag-checkered"></i> PLANES DE ESTUDIOS REGISTRADOS --}}

    <x-jet-secondary-button wire:click="$set('open',true)" class="float-right inline-flex">
        <i class="fa fa-plus-square"> AGREGAR</i>
    </x-jet-secondary-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            <div class="text-center border-gray-700 border-b-2">
                AGREGAR CURSO
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

                @if (isset($planEstudio->programa->facultade))                    
                    <select wire:model.defer="programa" class="form-control" disabled>
                        <option value="{{$programa->facultade->id}}">{{$programa->facultade->nombre}}</option>
                    </select>                                                          
                @endif    
                                                                             
            </div>

            {{-- NOMBRE DEL PROGRAMA -> SOLO PARA MOSTRAR  --}}
            <div class="mb-1">
                <x-jet-label value="Programa" />

                @if (isset($planEstudio->programa))                    
                    <select wire:model.defer="programa" class="form-control" disabled>
                        <option value="{{$programa->id}}">{{$programa->nombre}}</option>
                    </select>  
                @endif                                                                 
            </div>

            {{-- PLAN ESTUDIO ID --}}
            <div class="mb-1">
                <x-jet-label value="Periodo" />
                <select wire:model="planEstudio.codigo" class="form-control" disabled="true">                                                                                  
                        <option value="{{$this->planEstudio->id}}">{{$this->planEstudio->codigo}}</option>                    
                </select>                
            </div>
            
            {{-- CURSO ID --}}
            <div class="mb-1">
                <x-jet-label value="Seleccione Curso" />
                <select class="form-control">                                        
                    @foreach ($cursos as $curso)                        
                        <option value="{{$curso->id}}">{{$curso->nombre}}</option>
                    @endforeach
                </select>
                
            </div>

            {{-- CICLO ID --}}
            <div class="mb-1">
                <x-jet-label value="Seleccione Ciclo" />
                <select class="form-control">                    
                    @foreach ($ciclos as $ciclo)
                        <option value="{{$ciclo->id}}">{{$ciclo->nombre}}</option>
                    @endforeach
                </select>
            </div>
            
        </x-slot>

        <x-slot name="footer">
            
        </x-slot>
    </x-jet-dialog-modal>
    

</div>
