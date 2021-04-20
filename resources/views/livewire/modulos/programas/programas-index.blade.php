<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- DISEÑO DE LOS DIV PARA LA TABLA --}}
        <x-diseñotabla.tabla>          

            
            <div class="px-6 py-4 flex items-center border border-gray-200 shadow-lg">

                {{-- BUSCADOR GENERAL -> COMPONENTE REUTILIZABLE --}}
                <x-buscadortabla.buscador :type="$type='Programas'" />                

                {{-- BOTON CREAR NUEVA ENTIDAD --}}
                @livewire('modulos.programas.programas-create')                   
            </div>
            {{$buscador}}
            {{-- SI HAY AL MENOS UN REGISTRO DIBUJAMOS LA TABLA --}}
            @if ($programas->count())
                            
            <table class="min-w-full divide-y divide-gray-200 uppercase">
                <thead class="bg-gray-200">
                    <tr>
                        <th wire:click="order('id')" scope="col"
                            class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ID
                            @if ($this->campo !='id').
                                <i class="float-right fas fa-sort mt-1"></i>                                
                            @else
                                @if ($this->direccion=='asc')
                                    <i class="float-right fas fa-sort-up mt-1"></i>
                                @else
                                    <i class="float-right fas fa-sort-down mt-1"></i> 
                                @endif
                            @endif
                            
                        </th>
                        <th wire:click="order('nombre')" scope="col"
                            class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nombre
                            @if ($this->campo !='nombre').
                                <i class="float-right fas fa-sort mt-1"></i>                                
                            @else
                                @if ($this->direccion=='asc')
                                    <i class="float-right fas fa-sort-up mt-1"></i>
                                @else
                                    <i class="float-right fas fa-sort-down mt-1"></i> 
                                @endif
                            @endif
                        </th>
                        <th wire:click="order('codigo')" scope="col"
                            class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Codigo
                            @if ($this->campo !='codigo').
                                <i class="float-right fas fa-sort mt-1"></i>                                
                            @else
                                @if ($this->direccion=='asc')
                                    <i class="float-right fas fa-sort-up mt-1"></i>
                                @else
                                    <i class="float-right fas fa-sort-down mt-1"></i> 
                                @endif
                            @endif
                        </th>
                        <th wire:click="order('abreviatura')" scope="col"
                            class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Abreviatura
                            @if ($this->campo !='abreviatura').
                                <i class="float-right fas fa-sort mt-1"></i>                                
                            @else
                                @if ($this->direccion=='asc')
                                    <i class="float-right fas fa-sort-up mt-1"></i>
                                @else
                                    <i class="float-right fas fa-sort-down mt-1"></i> 
                                @endif
                            @endif
                        </th>
                        <th wire:click="order('facultade_id')" scope="col"
                            class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Facultad
                            @if ($this->campo !='facultade_id').
                                <i class="float-right fas fa-sort mt-1"></i>                                
                            @else
                                @if ($this->direccion=='asc')
                                    <i class="float-right fas fa-sort-up mt-1"></i>
                                @else
                                    <i class="float-right fas fa-sort-down mt-1"></i> 
                                @endif
                            @endif
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($programas as $programa)

                        <tr>
                            <td class="px-6 py-4 ">
                                <div class="text-sm font-medium text-gray-900">
                                    {{ $programa->id }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $programa->codigo }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $programa->nombre }}
                                </div>
                            </td>                            
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $programa->abreviatura }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $programa->facultade->nombre }}
                                </div>
                            </td>
                    
                            <td class="px-6 py-4">
                                <div class="flex item-center">
                                    {{-- Visible --}}
                                    <div class="cursor-pointer w-7 mr-2 border-gray-900 bg-blue-500 text-white border rounded-lg p-1 transform hover:text-purple-500 hover:bg-blue-700 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>

                                    {{-- BOTON EDITAR --}}
                                    <div>

                                        @livewire('modulos.programas.programas-update', ['programa' => $programa], key($programa->id))                                        
                                        
                                    </div>
                                                                    
                                    {{-- BOTON ELIMINAR --}}
                                    <div class="cursor-pointer w-7 mr-2 border-gray-900 bg-red-500 text-white border rounded-lg p-1 transform hover:text-purple-500 hover:bg-red-700 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>        
                        </tr>

                    @endforeach

                </tbody>
                
            </table>
            <div>                
                {{$programas->links()}}
            </div>
            @else
                <div class="px-6 py-4">
                    <span>Registro no Encontrado</span>
                </div>                        
            @endif
        </x-diseñotabla.tabla>
    </div>

</div>
