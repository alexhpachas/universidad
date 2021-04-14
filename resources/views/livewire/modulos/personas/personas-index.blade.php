<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- DISEÑO DE LOS DIV PARA LA TABLA --}}
        <x-diseñotabla.tabla>          

            
            <div class="px-6 py-4 flex items-center border-2 border-gray-200 shadow-lg">
 
                {{-- BUSCADOR GENERAL -> COMPONENTE REUTILIZABLE --}}
                <x-buscadortabla.buscador :type="$type='Personas'" />

                {{-- BOTON CREAR NUEVA ENTIDAD --}}
                @livewire('modulos.personas.personas-create')                   
            </div>
            
            {{-- SI HAY AL MENOS UN REGISTRO DIBUJAMOS LA TABLA --}}
            @if ($personas->count())
                            
            <table class="min-w-full divide-y divide-gray-200">
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
                        <th wire:click="order('nombres')" scope="col"
                            class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nombres
                            @if ($this->campo !='nombres').
                                <i class="float-right fas fa-sort mt-1"></i>                                
                            @else
                                @if ($this->direccion=='asc')
                                    <i class="float-right fas fa-sort-up mt-1"></i>
                                @else
                                    <i class="float-right fas fa-sort-down mt-1"></i> 
                                @endif
                            @endif
                        </th>
                        <th wire:click="order('apellidos')" scope="col"
                            class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Apellidos
                            @if ($this->campo !='apellidos').
                                <i class="float-right fas fa-sort mt-1"></i>                                
                            @else
                                @if ($this->direccion=='asc')
                                    <i class="float-right fas fa-sort-up mt-1"></i>
                                @else
                                    <i class="float-right fas fa-sort-down mt-1"></i> 
                                @endif
                            @endif
                        </th>
                        <th wire:click="order('dni')" scope="col"
                            class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            DNI
                            @if ($this->campo !='dni').
                                <i class="float-right fas fa-sort mt-1"></i>                                
                            @else
                                @if ($this->direccion=='asc')
                                    <i class="float-right fas fa-sort-up mt-1"></i>
                                @else
                                    <i class="float-right fas fa-sort-down mt-1"></i> 
                                @endif
                            @endif
                        </th>
                        <th wire:click="order('fecha_nacimiento')" scope="col"
                            class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Fecha Nacimiento
                            @if ($this->campo !='fecha_nacimiento').
                                <i class="float-right fas fa-sort mt-1"></i>                                
                            @else
                                @if ($this->direccion=='asc')
                                    <i class="float-right fas fa-sort-up mt-1"></i>
                                @else
                                    <i class="float-right fas fa-sort-down mt-1"></i> 
                                @endif
                            @endif
                        </th>
                        <th wire:click="order('email')" scope="col"
                            class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                            @if ($this->campo !='email').
                                <i class="float-right fas fa-sort mt-1"></i>                                
                            @else
                                @if ($this->direccion=='asc')
                                    <i class="float-right fas fa-sort-up mt-1"></i>
                                @else
                                    <i class="float-right fas fa-sort-down mt-1"></i> 
                                @endif
                            @endif
                        </th>
                        <th wire:click="order('genero')" scope="col"
                            class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Genero
                            @if ($this->campo !='genero').
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
                    @foreach ($personas as $persona)

                        <tr>
                            <td class="px-6 py-4 ">
                                <div class="text-sm font-medium text-gray-900">
                                    {{ $persona->id }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $persona->nombres }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $persona->apellidos }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $persona->dni }}
                                </div>
                            </td><td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $persona->fecha_nacimiento }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $persona->email }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $persona->genero }}
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
                                    {{-- Editar --}}
                                    <button wire:click="show({{$persona->id}})" class="focus:outline-none w-7 mr-2 border-gray-900 bg-yellow-500 text-white border rounded-lg p-1 transform hover:text-purple-500 hover:bg-yellow-700 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </button>
                                    
                                    {{-- Eliminar --}}
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
                {{$personas->links()}}
            </div>
            @else
                <div class="px-6 py-4">
                    <span>Registro no Encontrado</span>
                </div>                        
            @endif
        </x-diseñotabla.tabla>
    </div>

</div>
