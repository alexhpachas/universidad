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
                            <x-jet-label value="Plan :" />

                            <select wire:model="idplanestudio" class="form-control">
                                <option value="" selected>===SELECCIONE===</option>
                                @foreach ($planEstudios as $planEstudio)
                                    <option value="{{ $planEstudio->id }}">{{ $planEstudio->codigo }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                            <x-jet-danger-button wire:click="mostrar" class="mt-3 mr-3 bg-green-500 hover:bg-green-700" >
                                Ver Cursos
                            </x-jet-danger-button>                                                                                                                            
                    </div>
                    
                </div>
            </div>
        </div>{{-- CIERRE DEL CARD --}}
        
        <div wire:loading wire:target="mostrar" class="text-center mb-4 bg-green-100 border border-red-400 text-green-700 px-4 py-3 rounded relative w-full">
            <strong class="font-bold">!Procesando Datos!</strong>
            <span class="block sm:inline">Por favor espere...!</span>
        </div>
       {{--  @php
        $seleccion = ['1','2'];
   @endphp --}}
        {{-- OTRO CARD PARA EL CONTENIDO --}}
        @if (isset($idplanestudios))
            
                <div class="card grid-cols-4">
                    <div class="card-header bg-blue-400 border text-white">
                        <p class="ml-3 mt-1 mb-1"> GENERAR SECCIONES @livewire('modulos.curso-grupos.curso-grupos-create')</p></span>
                    </div>
                    {{-- <livewire:modulos.curso-grupos.curso-grupos-create selected = "$seleccion" />  --}}
                    {{-- CONTENIDO DEL CARD --}}
                    <div class="card-body">
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
                                    {{-- <th>Acciones</th> --}}
                                </tr>
                            </thead>
                           
                            <tbody>
                                @foreach ($cursoPlanes as $cursoPlane)
                                    
                                    <tr class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider border-b border-blue-200 hover:bg-gray-100">
                                        
                                        <td class="py-2"><x-jet-checkbox wire:model="selected.{{$cursoPlane->id}}" class="cursor-pointer" value="{{$cursoPlane->id}}" />{{$cursoPlane->id}}  </td>
                                        <td class="py-2">{{ $cursoPlane->planEstudio->codigo }}</td>
                                        <td class="py-2">{{ $cursoPlane->curso->codigo }}</td>
                                        <td class="py-2">{{ $cursoPlane->planEstudio->programa->abreviatura }}</td>
                                        <td class="py-2">{{ $cursoPlane->curso->nombre }}</td>
                                        <td class="py-2">{{ $cursoPlane->ciclo->nombre }}</td>
                                        <td><a wire:click="identificarr({{$cursoPlane->id}})" class="btn btn-actions btn-green"></a></td>
                                        {{-- <td>@livewire('modulos.curso-grupos.curso-grupos-create', ['cursoPlane' => $cursoPlane,'datos'=>$datos], key($cursoPlane->id))</td> --}}
                                        
                                        {{-- <td class="py-2">@livewire('modulos.curso-planes.curso-planes-update', ['cursoPlane'=>$cursoPlane], key(time().$cursoPlane->curso->id))</td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                                                                                                                        
                    </div>
                                     
                           
                </div>

                <div class="grid-cols-4">
                   
                    @foreach ($selected as $item)
                        {{$item}}
                    @endforeach

                    {{-- @if (isset($selected[0]))
                    {{$selected[1]}}
                    @endif --}}
                        
                  
                   {{--  {{$datos}} --}}                                                                           
                </div>
            
        @endif

    </div>
</div>
