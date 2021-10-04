<?php

namespace App\Http\Livewire\Modulos\CursoPlanes;

use App\Models\Ciclo;
use App\Models\Curso;

use App\Models\CursoPlaneCiclo;
use Livewire\Component;

class CursoPlanesUpdate extends Component
{
    public $open=false;
    public $cursoPlane;

    public function mount(CursoPlaneCiclo $cursoPlane){
        $this->cursoPlane = $cursoPlane;
    }

    protected $rules=[
        'cursoPlane.curso_id'=>'required|unique',
        'cursoPlane.plan_estudio_id'=>'required',
        'cursoPlane.ciclo_id'=>'required'
    ];

    public function actualizar(){
        $this->validate();
        
        $this->cursoPlane->save();
        $this->emitTo('modulos.curso-planes.curso-planes-index','render');
        $this->reset('open');
        $this->emit('update');
    }

    public function render()
    {
        $cursos = Curso::all();
        $ciclos = Ciclo::all();
        return view('livewire.modulos.curso-planes.curso-planes-update',compact('cursos','ciclos'));
    }
}
