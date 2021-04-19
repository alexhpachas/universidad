<?php

namespace App\Http\Livewire\Modulos\CursoPlanes;

use Livewire\Component;

class CursoPlanesIndex extends Component
{
    public function render()
    {
        return view('livewire.modulos.curso-planes.curso-planes-index');
    }

    public function index(){
        return view('unis.modulos.cursoplanes.index');
    }
}
