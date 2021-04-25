@props(['type'])


<div class="flex-1 mr-4">
    {{-- <input wire:model="buscador" type="text" class="form-control" placeholder="Buscar {{$type}}"> --}}
    <x-jet-input 
    wire:model.debounce.100ms="buscador"
    type="text" 
    class="form-control" 
    placeholder="Buscar {{$type}}" 
    >
    </x-jet-input> 
</div> 