<?php

namespace App\Http\Livewire\Modulos\Ciclos;

use App\Models\Ciclo;
use Livewire\Component;

class CiclosCreate extends Component
{
    public $open = false;
    public $nombre;

    protected $rules=([
        'nombre'=>'required|max:10|unique:ciclos'
    ]);

    public function guardar(){

        $this->validate();

        Ciclo::create([
            'nombre'=>$this->nombre
        ]);

        $this->reset('open','nombre');
        $this->emit('render');
        
        $this->emit('create');
    }


    public function render()
    {
        return view('livewire.modulos.ciclos.ciclos-create');
    }
}
