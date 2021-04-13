@props(['type'])


<div class="flex-1 mr-4">
    <x-jet-input 
    type="text" 
    class="form-control" 
    placeholder="Buscar {{$type}}" 
    wire:model="buscador">

    </x-jet-input> 
</div> 