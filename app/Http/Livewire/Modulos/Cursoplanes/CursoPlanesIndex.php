<?php

namespace App\Http\Livewire\Modulos\CursoPlanes;

use App\Models\Ciclo;
use App\Models\Curso;
use App\Models\Facultade;
use App\Models\PlanEstudio;
use App\Models\Programa;
use Livewire\Component;

class CursoPlanesIndex extends Component
{

    
    public $buscador="";
    public $campo="id";
    public $direccion="desc";
    public $idfacultad;
    public $idprograma;
    
    public function render()
    {
        $facultades = Facultade::all();   
        $programas = Programa::where('facultade_id',$this->idfacultad)->get();
        $planEstudios = PlanEstudio::where('programa_id',$this->idprograma)->get();
             
        return view('livewire.modulos.curso-planes.curso-planes-index',compact('facultades','programas','planEstudios'));
    }

    public function index(){
        return view('unis.modulos.cursoplanes.index');
    }
}
