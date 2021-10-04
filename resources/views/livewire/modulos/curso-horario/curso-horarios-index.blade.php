<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- ABRIRMOS UN CARD --}}
        <div class="card">
            <div class="card-header bg-blue-400 border text-white">
                <p class="ml-3 mt-1 mb-1"> GENERAR PROGRAMACIÓN ACADEMICA PARA MATRICULA</p></span>
            </div>

            <div class="card-body ">
                <div class="container flex">
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
                        {{-- PRIMER SELECT -> MODALIDADES --}}
                        <div class="mr-3">
                            <x-jet-label value="Modalidad :" />

                            <select class="form-control">
                                <option value="">REGULAR</option>
                            </select>
                        </div>

                        {{-- SEGUNDO SELECT -> FACULTAD --}}
                        <div class="mr-3">
                            <x-jet-label value="Facultad :" />

                            <select wire:model="idfacultad" wire:change="refresh" class="form-control hover-sm">
                                <option value="">===SELECCIONE===</option>
                                @foreach ($facultades as $facultade)
                                    <option value="{{ $facultade->id }}">{{ $facultade->nombre }}</option>
                                    {{ $facultade->programa }}
                                @endforeach
                            </select>
                        </div>

                        {{-- TERCER SELECT -> PROGRAMA --}}
                        <div class="items-center mr-3">
                            <x-jet-label value="Programa :" />

                            <select wire:model="idprograma" wire:change="refresh" class="form-control">
                                <option value="" selected>===SELECCIONE===</option>
                                @foreach ($programas as $programa)
                                    <option value="{{ $programa->id }}">{{ $programa->nombre }}</option>
                                @endforeach

                            </select>
                        </div>

                        {{-- CUARTO SELECT -> PLAN DE ESTUDIO --}}
                        <div class="items-center mr-3">
                            <x-jet-label value="Seleccione Periodo :" />

                            <select wire:model="idperiodo" class="form-control">
                                <option value="" selected>===SELECCIONE===</option>
                                @foreach ($periodos as $periodo)
                                    <option value="{{ $periodo->id }}">{{ $periodo->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <x-jet-danger-button wire:click="mostrar" class="mt-3 mr-3 bg-green-500 hover:bg-green-700">
                            Ver Cursos
                        </x-jet-danger-button>
                    </div>

                </div>
            </div>
        </div>{{-- CIERRE DEL CARD --}}
        

        @if (isset($idperiodo))
            <div wire:loading wire:target="mostrar"
                class="text-center mb-4 bg-green-100 border border-red-400 text-green-700 px-4 py-3 rounded relative w-full">
                <strong class="font-bold">!Procesando Datos!</strong>
                <span class="block sm:inline">Por favor espere...!</span>
            </div>
        @endif
          
        {{-- OTRO CARD PARA EL CONTENIDO --}}
        @if (isset($idperiodos))        
            <div class="card grid-cols-4">
                <div class="card-header bg-blue-400 border text-white">
                    <p class="ml-3 mt-1 mb-1"> GENERAR HORARIOS DE CURSOS<a wire:click="$set('open',true)"
                            class="btn btn-red btn-actions float-right"><i class="fas fa-plus"></i></a></p></span>
                            
                </div>
                {{-- <livewire:modulos.curso-grupos.curso-grupos-create selected = "$seleccion" /> --}}
                {{-- CONTENIDO DEL CARD --}}
                
                <div class="card-body">

                    {{-- PROBANDO BUSCADOR --}}
                   
                 
                        <input type="text" wire:model="buscar" wire:keydown.enter="asignarPrimero()"  class="form-control" placeholder="Buscar Curso">
                        @if ($buscar!="")   
                        @if(count($cursos)>0)                                                                            
                        <div class="shadow rounded px-3 pt-3 pb-0 ">
                            @foreach ($cursos as $curso)
                                <div class="cursor-pointer hover:text-red-700 ">
                                    <a  wire:click="asignar({{$curso->id}})" >{{$curso->nombre}}</a>                                    
                                </div>
                            @endforeach
                            @endif
                        </div>                         
                        @endif
                    
                        @if (isset($dato))
                            Selecciono : {{$dato->nombre}}
                            <br>
                            id : {{$dato->id}}
                        @endif

                        <div wire:poll.10s>
                            <small class="text-muted">Fecha Actual : {{ now()}}</small>
                        </div>

                    {{-- CERRANDO EL BUSCADOR --}}
                    

                    <table class="min-w-full divide-y divide-gray-200 uppercase">
                        <thead>
                            <tr
                                class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                <th></th>
                                <th>Plan</th>
                                <th>Codigo</th>
                                <th>Carrera</th>
                                <th>Curso</th>
                                <th>Ciclo</th>
                                <th>Grupo</th>
                                {{-- <th>Acciones</th> --}}
                            </tr>
                        </thead>

                        <tbody>                                                                                        
                                @foreach ($cursoPlanePeriodoGrupos as $cursoPlanePeriodoGrupo)
                                @if ($cursoPlanePeriodoGrupo->cursoPlaneCiclo->planEstudio->programa->id == $idprograma)
                                    <tr
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider border-b border-blue-200 hover:bg-gray-100">
                                        <td></td>
                                        <td class="py-2">{{ $cursoPlanePeriodoGrupo->cursoPlaneCiclo->planEstudio->codigo}}</td>
                                        <td class="py-2">{{ $cursoPlanePeriodoGrupo->cursoPlaneCiclo->curso->codigo}}</td>
                                        
                                        <td class="py-2">{{ $cursoPlanePeriodoGrupo->cursoPlaneCiclo->planEstudio->programa->nombre}}</td>
                                        <td class="py-2">{{ $cursoPlanePeriodoGrupo->cursoPlaneCiclo->curso->nombre}}</td>
                                        <td class="py-2">{{ $cursoPlanePeriodoGrupo->cursoPlaneCiclo->ciclo->nombre}}</td>
                                        <td class="py-2">{{ $cursoPlanePeriodoGrupo->grupo->nombre }}</td>
                                        
                                    </tr>
                                @endif
                                @endforeach                            
                        </tbody>
                    </table>

                </div>


            </div>

            <div class="grid-cols-4">

                {{-- @foreach ($selected as $key => $item)
                        <input class="mb-3" wire:model='selected.{{$key }}' type="text" />
                    @endforeach --}}

                {{-- @foreach ($selected as $key => $item)
                        <input class="mb-3" wire:model='selected.{{$key }}' type="text" />
                    @endforeach --}}

                {{-- @foreach ($seleccionesCurso as $key => $seleccione)                    
                    <p>{{ $seleccione}}</p>
                @endforeach --}}
               

            </div>



            {{-- MODAL  PARA CREAR GRUPO --}}
            {{-- <x-jet-dialog-modal wire:model="open">
                <x-slot name="title">
                    <div class="text-center border-gray-700 border-b-2">
                        CREAR GRUPO
                    </div>
                </x-slot>

                <x-slot name="content">
                    <p class="mb-2 font-bold">Periodo</p>


                    <div class="inline">
                        @if (isset($periodos))
                            <select wire:model.defer="periodo_id" class="form-control">
                                <option value="">=====SELECCIONE=====</option>
                                @foreach ($periodos as $periodo)
                                    <option value="{{ $periodo->id }}">{{ $periodo->nombre }}</option>
                                @endforeach
                            </select>
                        @endif

                        <x-jet-input-error for="periodo_id" />
                    </div>




                    <p class="mb-2 font-bold">Cursos</p>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="inline">
                                @if (count($seleccionesCurso) > 0)
                                    @foreach ($seleccionesCurso as $key => $seleccione)
                                        @if ($seleccione != null)
                                            <p>
                                                <li>{{ $seleccionesCurso[$key] }}</li>
                                            </p>
                                        @endif
                                    @endforeach
                                    
                                    @if (isset($var))
                                    {{$var}}    
                                    @endif
                                    
                                @else
                                    <p>No ha seleccionado ningún curso</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <x-jet-input-error for="seleccionesCurso" />


                    <p class="mb-2 font-bold">Secciones</p>

                    <div class="card">
                        <div class="card-body">
                            @foreach ($grupos as $grupo)
                                <div class="inline uppercase">
                                    <label class="cursor-pointer">

                                        <x-jet-checkbox wire:model.defer="seleccionesSeccion"
                                            value="{{ $grupo->id }}" class="ml-3 cursor-pointer">
                                        </x-jet-checkbox>
                                        {{ $grupo->nombre }}
                                    </label>
                                </div>
                            @endforeach
                        </div>


                        <x-jet-input-error for="seleccionesSeccion" />
                    </div>

            
                </x-slot>

                <x-slot name="footer">
                    <x-jet-danger-button wire:click="guardar">
                        CREAR REGISTRO
                    </x-jet-danger-button>

                    <x-jet-secondary-button wire:click="resetear">
                        CANCELAR
                    </x-jet-secondary-button>
                </x-slot>
            </x-jet-dialog-modal> --}}

        @endif
    </div>
</div>
