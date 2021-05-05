<div>
    {{-- <x-jet-danger-button wire:click="$set('open',true)" class="float-right">
        Agregar Seccion
    </x-jet-danger-button> --}}
    <x-jet-checkbox wire:click="$set('open',true)">

    </x-jet-checkbox>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            <div class="text-center border-gray-200 border-b">
                AGREGAR SECCIONES
            </div>

        </x-slot>

        <x-slot name="content">
            <div class="card">
                <p class="ml-3 mt-2 font-bold">Cursos Seleccionados</p>
                <div class="card-body">
                    
                        <div class="inline">
                            @if (isset($datos))
                            @foreach ($datos as $item)
                                {{$item}}
                            @endforeach
                            {{-- {{$datos->curso->nombre}}     --}}
                            @endif
                            
                        </div>
                

                </div>
            </div>
            <div class="card">
                <p class="ml-3 mt-2 font-bold">Seleccionar Secciones</p>
                <div class="card-body">
                    @foreach ($grupos as $grupo)
                        <div class="inline">
                            <label class="cursor-pointer">
                                <x-jet-checkbox wire:model="selected.{{$grupo->id}}" value="{{$grupo->nombre}}" class="ml-3 cursor-pointer">
                                    
                                </x-jet-checkbox>
                                {{$grupo->nombre}}
                            </label>
                        </div>
                    @endforeach

                </div>
            </div>

          
            
         

        </x-slot>

        <x-slot name="footer">
            <x-jet-danger-button>
                CREAR REGISTRO
            </x-jet-danger-button>

            <x-jet-secondary-button wire:click="$set('open',false)">
                CANCELAR
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
