<?php

namespace App\Http\Livewire\Modulos\CursoGrupos;

use App\Models\Curso;
use App\Models\CursoPlane;
use App\Models\Facultade;
use App\Models\Grupo;
use App\Models\Periodo;
use App\Models\PlanEstudio;
use App\Models\Programa;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class CursoGruposIndex extends Component
{
    public $idprograma, $idfacultad, $idplanestudio, $idplanestudios;
    public array $selecciones = [];
    public array $seleccionesSeccion = [];
    public $open=false;

    public $buscador;
    public $buscar;
    public $activo=false;
    public $cursos;

    public $dato;

    /* VARIABLES A INSERTAR */

    public $curso_plane_id,$grupo_id,$periodo_id,$user_id;


    protected $listeners = ['render'];

    protected $rules = [
        'curso_plane_id'=>'required',
        'grupo_id'=>'required',
        'periodo_id'=>'required',
        'user_id'=>'required',
        'seleccionesSeccion'=>'required',
        'selecciones'=>'required'
    ];

   

    public function asignar(Curso $id){
        
        $this->dato=$id;
        $this->reset('buscar');
    }

    public function asignarPrimero(){
        $this->dato = Curso::where('nombre','like','%'.$this->buscar.'%')->first();
        $this->reset('buscar');
    }

    public function render()
    {
        $facultades = Facultade::all();
        $programas = Programa::where('facultade_id', $this->idfacultad)->get();
        $planEstudios = PlanEstudio::where('programa_id', $this->idprograma)->get();
        $cursoPlanes  = CursoPlane::where('plan_estudio_id', $this->idplanestudios)->get();
        $grupos = Grupo::all();
        $periodos = Periodo::all();
        $this->cursos=Curso::where('nombre','like','%'.$this->buscar.'%')->take(3)->get();
    
        
        return view('livewire.modulos.curso-grupos.curso-grupos-index', compact('facultades', 'programas', 'planEstudios', 'cursoPlanes', 'grupos','periodos'));
    }

    public function guardar(){
        $this->validate();
    }

    public function refresh()
    {
        $this->reset('idplanestudio', 'idplanestudios');
    }

    public function resetear(){
        $this->reset('selecciones','open','seleccionesSeccion');
    }  

    public function mostrar()
    {
        $this->idplanestudios = $this->idplanestudio;
        $this->reset('selecciones');
    }


    public function index()
    {
        return view('unis.modulos.cursogrupos.index');
    }
}
