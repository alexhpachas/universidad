<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- DISEÑO DE LOS DIV PARA LA TABLA --}}
        <x-diseñotabla.tabla>


            {{-- <div class="px-6 py-4 flex items-center border border-gray-200 shadow-lg"> --}}

            {{-- BUSCADOR GENERAL -> COMPONENTE REUTILIZABLE --}}
            {{-- <x-buscadortabla.buscador :type="$type='Cursoplanes'" /> --}}

            {{-- BOTON CREAR NUEVA ENTIDAD --}}

            {{-- </div> --}}
            
            <div>
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

                                    <select wire:model="idfacultad" wire:change="refresh" class="form-control hover-sm">
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

                                    <select wire:model="idprograma" wire:change="refreshh"  class="form-control">
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
                        {{-- @if (isset($this->idprograma))
                        <x-jet-danger-button x-on:click="open=!open">
                            VER PLANES DE ESTUDIO
                        </x-jet-danger-button>
                        @else
                        <x-jet-danger-button x-on:click="open=true" disabled>
                            VER PLANES DE ESTUDIO
                        </x-jet-danger-button>
                        @endif --}}
                        
                    </div>
                </div>

                
                @if (isset($idprograma))
                <div  class="card">
                    
                        <div class="card-header bg-blue-400 border text-white">
                            <p class="ml-3 mt-1 mb-1">
                                <div>
                                    <i class="fa fa-flag-checkered"></i> PLANES DE ESTUDIOS REGISTRADOS
                                </div>
                            
                                {{-- @livewire('modulos.curso-planes.curso-planes-create') --}}
                                {{-- @livewire('component', ['user' => $user], key($user->id)) --}}
                                
                            
                        </div>

                        
                        <div class="card-body">
                            

                                <table class="min-w-full divide-y divide-gray-200 uppercase">
                                    <thead>
                                        <tr class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                            <th>Plan Estudio</th>
                                            <th>programa</th>
                                            
                                            <th>Estado</th>
                                            
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                        
                                    
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($planEstudios as $planEstudio)    
                                        <tr class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider ">
                                            
                                            <td class="py-2" >{{$planEstudio->codigo}}</td>      
                                            <td class="py-2" >{{$planEstudio->programa->nombre}}</td>      
                                                
                                            <td class="py-2" >
                                                @if ($planEstudio->estado==2)
                                                    Activo
                                                @else
                                                    Inactivo
                                                @endif
                                                
                                            </td>
                                            <td class="py-2">
                                                <div class="d-inline">
                                                @livewire('modulos.curso-planes.curso-planes-create', ['planEstudio' => $planEstudio], key(time().$planEstudio->id))                                                                                                                                     
                                                    
                                                
                                                    <button wire:click="mostrar({{$planEstudio->id}})" class="btn btn-blue btn-actions"><i class="far fa-eye"></i></button>
                                            

                                                {{-- <div wire:click="mostrar({{$planEstudio->id}})" class="ml-2 d-inline-block cursor-pointer w-7 mr-2 border-gray-900 bg-blue-500 text-white border rounded-lg p-1 transform hover:text-purple-500 hover:bg-blue-700 hover:scale-110">
                                                    <svg class="d-inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </div> --}}
                                                
                                                                                                                                                                                                                                                                        
                                                </div>
                                            </td>
                                            
                                                                                
                                        </tr>
                                        @endforeach
                                    </tbody>
                                        
                                    </table>
                            
                        </div>
                    
                </div>
                @endif
                @if (isset($idplanestudio))
                <div>                                                         
                    <div class="card">
                        <div class="card-header bg-blue-400 border text-white">
                            <p class="ml-3 mt-1 mb-1"><i class="fa fa-rocket"></i> CURSOS DEL PLAN</p></span>
                        </div>
                        
                        <div class="card-body">
                            <table class="min-w-full divide-y divide-gray-200 uppercase">
                                <thead>
                                    <tr class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                        <th>Plan</th>
                                        <th>proggit</th>
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
                                        <td class="py-2">{{$cursoPlane->planEstudio->codigo}}</td>
                                        <td class="py-2">{{$cursoPlane->planEstudio->programa->abreviatura}}</td>
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
                    
                @endif
                
            
            </div>
            {{-- SI HAY AL MENOS UN REGISTRO DIBUJAMOS LA TABLA --}}

        </x-diseñotabla.tabla>
        {{$cursoPlanes->links()}}
    </div>

</div>
