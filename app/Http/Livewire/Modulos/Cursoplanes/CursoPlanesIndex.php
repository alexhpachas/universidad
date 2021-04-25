<?php

namespace App\Http\Livewire\Modulos\CursoPlanes;


use App\Models\CursoPlane;
use App\Models\Facultade;
use App\Models\PlanEstudio;
use App\Models\Programa;
use Livewire\Component;

use Livewire\WithPagination;

class CursoPlanesIndex extends Component
{

    use WithPagination;

    
    public $buscador="";
    public $campo="id";
    public $direccion="desc";
    public $idfacultad;
    public $idprograma;
    public $idplanestudio;
    public $botton=true;
    public $estudio;

    protected $listeners=['render'];

    public function render()
    {
        $facultades = Facultade::all();   
        $programas = Programa::where('facultade_id',$this->idfacultad)->get();
        $planEstudios = PlanEstudio::where('programa_id',$this->idprograma)->get();
        $cursoPlanes = CursoPlane::where('plan_estudio_id',$this->idplanestudio)->latest('id')->paginate(10);                     
        return view('livewire.modulos.curso-planes.curso-planes-index',compact('facultades','programas','planEstudios','cursoPlanes'));
    }

    public function mostrar($id){
        $estudios = CursoPlane::find($id);
        $this->idplanestudio = $id;
        $this->render();
    }

    public function refresh(){
        
        $this->reset('idfacultad','idplanestudio','planEstudios','open');
        $this->render();
    }

    public function index(){
        return view('unis.modulos.cursoplanes.index');
    }
}
