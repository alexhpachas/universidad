<?php

namespace App\Http\Livewire\Modulos\Periodos;

use App\Models\Periodo;
use Livewire\Component;

class PeriodosCreate extends Component
{

    public $open = false;
    public $nombre;

    protected $rules=([
        'nombre'=>'required|max:10|unique:periodos'
    ]);

    public function guardar(){

        $this->validate();

        Periodo::create([
            'nombre'=>$this->nombre
        ]);

        $this->reset('open','nombre');
        $this->emit('render');

        $this->emit('create');
    }


    
    public function render()
    {
        return view('livewire.modulos.periodos.periodos-create');
    }
}
