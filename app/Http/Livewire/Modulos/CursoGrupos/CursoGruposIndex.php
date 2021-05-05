<?php

namespace App\Http\Livewire\Modulos\CursoGrupos;

use App\Models\CursoPlane;
use App\Models\Facultade;
use App\Models\Grupo;
use App\Models\PlanEstudio;
use App\Models\Programa;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class CursoGruposIndex extends Component
{
    public $idprograma, $idfacultad, $idplanestudio, $idplanestudios;
    public $selected = [];
    public $dato = [];
    public $datos = [];




    public $cursoid;


    protected $listeners = ['render'];

    public function render()
    {
        $facultades = Facultade::all();
        $programas = Programa::where('facultade_id', $this->idfacultad)->get();
        $planEstudios = PlanEstudio::where('programa_id', $this->idprograma)->get();
        $cursoPlanes  = CursoPlane::where('plan_estudio_id', $this->idplanestudios)->get();
        $grupos = Grupo::all();
        return view('livewire.modulos.curso-grupos.curso-grupos-index', compact('facultades', 'programas', 'planEstudios', 'cursoPlanes', 'grupos'));
    }



    public function refresh()
    {
        $this->reset('idplanestudio', 'idplanestudios');
    }

    public function mostrar()
    {
        $this->idplanestudios = $this->idplanestudio;
    }

    public function identificarr(CursoPlane $id)
    {
        $this->datos[] = $id;
        

        /* foreach($this->selected as $select){
            $this->datos = $this->$select;
        } */
    }


    public function mount(CursoPlane $selected)
    {
        $this->datos[] = $selected;
    }

    public function index()
    {
        return view('unis.modulos.cursogrupos.index');
    }
}
