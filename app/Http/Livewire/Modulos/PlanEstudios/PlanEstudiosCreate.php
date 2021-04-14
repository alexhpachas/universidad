<?php

namespace App\Http\Livewire\Modulos\PlanEstudios;

use App\Models\PlanEstudio;
use Livewire\Component;

class PlanEstudiosCreate extends Component
{
    
    public $open = false;
    public $codigo;

    protected $rules=([
        'codigo'=>'required|max:10|unique:Plan_Estudios'
    ]);

    public function guardar(){

        $this->validate();

        PlanEstudio::create([
            'codigo'=>$this->codigo
        ]);

        $this->reset('open','codigo');
        $this->emit('render');
        
        $this->emit('create');
    }


    public function render()
    {
        return view('livewire.modulos.plan-estudios.plan-estudios-create');
    }
}
