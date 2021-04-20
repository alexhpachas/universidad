<?php

namespace App\Http\Livewire\Modulos\CursoPlanes;

use App\Models\Ciclo;
use App\Models\Curso;
use App\Models\PlanEstudio;
use Livewire\Component;

class CursoPlanesIndex extends Component
{
    public $buscador="";
    public $campo="id";
    public $direccion="desc";
    
    public function render()
    {
        $planEstudios = PlanEstudio::all();
        $ciclos = Ciclo::all();
        $cursos = Curso::all();
        return view('livewire.modulos.curso-planes.curso-planes-index',compact('planEstudios','ciclos','cursos'));
    }

    public function index(){
        return view('unis.modulos.cursoplanes.index');
    }
}
