<?php

namespace App\Http\Livewire\Modulos\PlanEstudios;

use App\Models\Curso;
use App\Models\PlanEstudio;
use App\Models\Programa;
use Livewire\Component;

class PlanEstudiosCreate extends Component
{
    
    public $open = false;
    public $codigo,$programa_id=1,$probar;
    public $programa;

    protected $rules=([
        'codigo'=>'required|max:10|unique:plan_estudios'
    ]);

    public function guardar(){

        $this->validate();

        PlanEstudio::create([
            'codigo'=>$this->codigo,
            'programa_id'=>$this->programa_id
        ]);

        $this->reset('open','codigo');
        $this->emit('render');
        
        $this->emit('create');
    }


    public function render()
    {
        $programas = Programa::all();
        
        return view('livewire.modulos.plan-estudios.plan-estudios-create',compact('programas'));
    }
}
