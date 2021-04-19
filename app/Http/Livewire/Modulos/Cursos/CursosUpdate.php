<?php

namespace App\Http\Livewire\Modulos\Cursos;

use App\Models\Ciclo;
use App\Models\Curso;
use App\Models\PlanEstudio;
use App\Models\Programa;
use Livewire\Component;

class CursosUpdate extends Component
{
    public $open=false;
    public $curso;

    protected $rules=[
        'curso.codigo'=>'required',
        'curso.nombre'=>'required',
        'curso.horas_teoricas'=>'required',
        'curso.horas_practicas'=>'required',
        'curso.creditos'=>'required',
        'curso.tipo'=>'required',
        'curso.programa_id'=>'required',
        'curso.plan_estudio_id'=>'required',
        'curso.ciclo_id'=>'required',
    ];

    public function mount(Curso $curso){
        $this->curso=$curso;
    }

    public function actualizar(){
        $this->validate();
        
        $this->curso->save();
        $this->emit('render');
        $this->emit('update');
        $this->reset('open');
    }

    public function render()
    {        
        $programas = Programa::where('estado','2')->get();
        $planEstudios = PlanEstudio::where('estado','2')->get();
        $ciclos=Ciclo::all();
        return view('livewire.modulos.cursos.cursos-update',compact('programas','planEstudios','ciclos'));
    }
}
