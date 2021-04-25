<?php

namespace App\Http\Livewire\Modulos\PlanEstudios;

use App\Models\PlanEstudio;
use App\Models\Programa;
use Livewire\Component;

class PlanEstudiosUpdate extends Component
{
    public $open=false;
    public $planEstudio;

    public function mount(PlanEstudio $planEstudio){
        $this->planEstudio=$planEstudio;
    }
    
    protected $rules=[
        'planEstudio.codigo'=>'required',
        'planEstudio.programa_id'=>'required'
    ];

    public function actualizar(){
        $this->validate();

        $this->planEstudio->save();

        $this->emit('render');
        $this->reset('open');
        $this->emit('update');
    }


    public function render()
    {
        $programas = Programa::all();
        return view('livewire.modulos.plan-estudios.plan-estudios-update',compact('programas'));
    }
}
