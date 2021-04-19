<?php

namespace App\Http\Livewire\Modulos\Cursos;

use App\Models\Ciclo;
use App\Models\Curso;
use App\Models\PlanEstudio;
use App\Models\Programa;
use Livewire\Component;

class CursosCreate extends Component
{
    public $open=false;
    public $codigo,$nombre,$horas_teoricas,$horas_practicas,$creditos,$tipo,$programa_id=1,$plan_estudio_id=1,$ciclo_id=1;
    
    protected $rules=[
        'codigo'=>'required',
        'nombre'=>'required',
        'horas_teoricas'=>'required',
        'horas_practicas'=>'required',
        'creditos'=>'required',
        'tipo'=>'required',
        'programa_id'=>'required',
        'plan_estudio_id'=>'required',
        'ciclo_id'=>'required',
    ];
    
    public function render()
    {
        $programas = Programa::where('estado','2')->get();
        $planEstudios = PlanEstudio::where('estado','2')->get();
        $ciclos=Ciclo::all();
        return view('livewire.modulos.cursos.cursos-create',compact('programas','planEstudios','ciclos'));
    }

    public function guardar(){
        $this->validate();

        Curso::create([
            'codigo'=>$this->codigo,
            'nombre'=>$this->nombre,
            'horas_teoricas'=>$this->horas_teoricas,
            'horas_practicas'=>$this->horas_practicas,
            'creditos'=>$this->creditos,
            'tipo'=>$this->tipo,
            'programa_id'=>$this->programa_id,
            'plan_estudio_id'=>$this->plan_estudio_id,
            'ciclo_id'=>$this->ciclo_id,            
        ]);

        $this->emit('render');
        $this->reset('open','codigo','nombre','horas_teoricas','horas_practicas','creditos','tipo','programa_id','plan_estudio_id','ciclo_id');
        $this->emit('create');
    }
}
