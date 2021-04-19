<?php

namespace App\Http\Livewire\Modulos\Cursoplanes;

use Livewire\Component;

class CursoPlanesIndex extends Component
{
    public function render()
    {
        return view('livewire.modulos.cursoplanes.curso-planes-index');
    }

    public function index(){
        return view('unis.modulos.cursoplanes.index');
    }
}