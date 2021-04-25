<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- DISEÑO DE LOS DIV PARA LA TABLA --}}
        <x-diseñotabla.tabla>


            {{-- <div class="px-6 py-4 flex items-center border border-gray-200 shadow-lg"> --}}

            {{-- BUSCADOR GENERAL -> COMPONENTE REUTILIZABLE --}}
            {{-- <x-buscadortabla.buscador :type="$type='Cursoplanes'" /> --}}

            {{-- BOTON CREAR NUEVA ENTIDAD --}}

            {{-- </div> --}}
            
            <div x-data="{ open: false }">
                <div class="card">
                    <div class="card-header bg-blue-400 border text-white">
                        <p class="ml-3 mt-1 mb-1"><i class="fa fa-globe"></i> GESTION - PLAN DE ESTUDIO</p></span>
                    </div>
                    {{-- {{$cursoPlanes}} --}}
                    <div class="card-body ">
                        <div class="container flex">
                            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3">

                                <div class="mr-3">
                                    <x-jet-label value="Seleccione Modalidad :" />

                                    <select class="form-control">
                                        <option value="">REGULAR</option>                                    
                                    </select>
                                </div>

                                <div class="mr-3">
                                    <x-jet-label value="Seleccionar Facultad :" />

                                    <select wire:model="idfacultad" {{-- wire:click="refresh" --}} class="form-control hover-sm">
                                        <option value="">===SELECCIONE===</option>
                                        @foreach ($facultades as $facultade)
                                            {{-- <option value="{{ $facultade->id }}">{{ $facultade->nombre }}</option> --}}
                                            <option value="{{$facultade->id}}">{{$facultade->nombre}}</option>
                                            {{$facultade->programa}}

                                        @endforeach
                                        
                                    </select>
                                    
                                </div>

                                <div class="items-center">
                                    <x-jet-label value="Seleccionar Programa :" />

                                    <select wire:model="idprograma"  class="form-control">
                                        <option value="" selected>===SELECCIONE===</option>
                                        @foreach ($programas as $programa)
                                            <option value="{{ $programa->id }}">{{ $programa->nombre }}</option>
                                            {{-- <option value="{{$programa->id}}">{{$programa->planEstudio->codigo}}</option> --}}

                                        @endforeach

                                    </select>
                                </div>
                                
                            </div>

                        </div>
                    </div>

                    <div class="card-footer bg-white">
                        @if (isset($this->idprograma))
                        <x-jet-danger-button x-on:click="open=!open">
                            VER PLANES DE ESTUDIO
                        </x-jet-danger-button>
                        @else
                        <x-jet-danger-button x-on:click="open=true" disabled>
                            VER PLANES DE ESTUDIO
                        </x-jet-danger-button>
                        @endif
                        
                    </div>
                </div>
                
                <div x-show="open" class="card">
                    <div class="card-header bg-blue-400 border text-white">
                        <p class="ml-3 mt-1 mb-1">
                            <div>
                                <i class="fa fa-flag-checkered"></i> PLANES DE ESTUDIOS REGISTRADOS
                            </div>
                          
                            {{-- @livewire('modulos.curso-planes.curso-planes-create') --}}
                            {{-- @livewire('component', ['user' => $user], key($user->id)) --}}
                            
                        
                    </div>

                    <div class="card-body">
                        @if (isset($planEstudios))

                            <table class="min-w-full divide-y divide-gray-200 uppercase">
                                <thead>
                                    <tr class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                        <th>Curricula</th>
                                        <th>Estado</th>
                                        <th></th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                    @foreach ($planEstudios as $planEstudio)
                                
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider mt-3">
                                        <td class="py-2">{{$planEstudio->codigo}}</td>        
                                        <td class="py-2">
                                            @if ($planEstudio->estado==2)
                                                Activo
                                            @else
                                                Inactivo
                                            @endif
                                            {{-- {{$planEstudio->estado}} --}}
                                        </td>
                                        <td class="py-2">@livewire('modulos.curso-planes.curso-planes-create', ['planEstudio' => $planEstudio], key(time().$planEstudio->id))</td>
                                        <td class="py-2"><x-jet-secondary-button>EDITAR</x-jet-secondary-button></td>
                                    </tr>
                                </tbody>
                                    
                                </table>
                                
                            
                                
                                
                                {{-- {{$planEstudio->programa->facultade->nombre}} --}}
                                
                                
                                
                                
                                {{-- {{$planEstudio}} --}}
                                {{-- <x-jet-danger-button  wire:click="show({{$planEstudio->id}})">Agregar Cursos</x-jet-danger-button> --}}
                                
                                {{-- @livewire('modulos.curso-planes.curso-planes-create', ['planEstudio' => $planEstudio], key($planEstudio->id)) --}}
                                                                                                                           
                            @endforeach                             
                                                                                     
                        @endif
                        
                        
                    </div>
                </div>
            
                
                <div >                    
                    <div x-show.transition="open" class="card">
                        <div class="card-header bg-blue-400 border text-white">
                            <p class="ml-3 mt-1 mb-1"><i class="fa fa-rocket"></i> CURSOS DEL PLAN</p></span>
                        </div>
                        
                        <div class="card-body">
                            <table class="min-w-full divide-y divide-gray-200 uppercase">
                                <thead>
                                    <tr class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                        <th>Codigo</th>
                                        <th>Curso</th>
                                        <th>HT</th>
                                        <th>HP</th>
                                        <th>CRED</th>
                                        <th>Tipo</th>
                                        <th>Requisitos</th>                                        
                                        <th>Acciones</th>
                                    </tr>
                                </thead> 
                                                                                            
                                <tbody>                                   
                                    @foreach ($cursoPlanes as $cursoPlane) 
                                    <tr class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                        <td class="py-2">{{$cursoPlane->curso->codigo}}</td>
                                        <td class="py-2">{{$cursoPlane->curso->nombre}}</td>
                                        <td class="py-2">{{$cursoPlane->curso->horas_teoricas}}</td>
                                        <td class="py-2">{{$cursoPlane->curso->horas_practicas}}</td>
                                        <td class="py-2">{{$cursoPlane->curso->creditos}}</td>
                                        <td class="py-2">{{$cursoPlane->curso->tipo}}</td>
                                        <td class="py-2"><x-jet-secondary-button>Requisitos</x-jet-secondary-button></td>
                                        
                                        <td class="py-2">@livewire('modulos.curso-planes.curso-planes-update', ['cursoPlane' => $cursoPlane], key(time().$cursoPlane->curso->id))</td>
                                        

                                    </tr>
                                    @endforeach 
                                </tbody>
                            </table>
                            {{-- @foreach ($cursoPlanes as $cursoPlane)
                                {{$cursoPlane->id}}
                                {{$cursoPlane->curso->nombre}}
                                {{$cursoPlane->curso->horas_teoricas}}
                                {{$cursoPlane->estado}}
                            @endforeach  --}}
                        </div>
                    </div>
                </div>
            
            </div>
            {{-- SI HAY AL MENOS UN REGISTRO DIBUJAMOS LA TABLA --}}

        </x-diseñotabla.tabla>
        {{$cursoPlanes->links()}}
    </div>

</div>
