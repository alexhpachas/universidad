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

                                    <select wire:model="idfacultad" class="form-control hover-sm">
                                        <option value="">===SELECCIONE===</option>
                                        @foreach ($facultades as $facultade)
                                            <option value="{{ $facultade->id }}">{{ $facultade->nombre }}</option>

                                        @endforeach
                                    </select>
                                </div>

                                <div class="items-center">
                                    <x-jet-label value="Seleccionar Programa :" />

                                    <select wire:model="idprograma" class="form-control">
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
                        <x-jet-danger-button x-on:click="open=true">
                            VER PLANES DE ESTUDIO
                        </x-jet-danger-button>
                    </div>
                </div>

                <div x-show="open" class="card">
                    <div class="card-header bg-blue-400 border text-white">
                        <p class="ml-3 mt-1 mb-1"><i class="fa fa-flag-checkered"></i> PLANES DE ESTUDIOS REGISTRADOS</p></span>
                    </div>
                    <div class="card-body">
                        @if (isset($planEstudios))
                            @foreach ($planEstudios as $planEstudio)
                                {{$planEstudio->codigo}}                  
                            @endforeach                                                                                                  
                        @endif
                        
                        
                    </div>
                </div>
            </div>
    
            {{-- SI HAY AL MENOS UN REGISTRO DIBUJAMOS LA TABLA --}}

        </x-diseñotabla.tabla>
    </div>

</div>
