<?php

namespace App\Http\Livewire\Modulos\CursoHorario;

use App\Models\Curso;
use App\Models\CursoPlaneCiclo;
use App\Models\CursoPlanePeriodoGrupo;
use App\Models\Facultade;
use App\Models\Grupo;
use App\Models\Periodo;
use App\Models\PlanEstudio;
use App\Models\Programa;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CursoHorariosIndex extends Component
{
    public $idprograma, $idfacultad, $idperiodo,$idperiodos;
    public array $seleccionesCurso = [];
    public array $seleccionesCursoNombre = []; 
    public array $seleccionesSeccion = [];
    public $open=false;

    public $buscador;
    public $buscar;
    public $activo=false;
    public $cursos;

    public $dato;


    public function render()
    {
        $facultades = Facultade::all();
        $programas = Programa::where('facultade_id', $this->idfacultad)->get();                                
        $periodos = Periodo::all();
        $cursoPlanePeriodoGrupos  = CursoPlanePeriodoGrupo::all();

       
        
        return view('livewire.modulos.curso-horario.curso-horarios-index',compact('facultades', 'programas', 'cursoPlanePeriodoGrupos','periodos'));
    }

    public function index()
    {
        return view('unis.modulos.cursohorarios.index');
    }

    public function updatedIdPeriodo(){
        $this->reset('idperiodos');
    }

    public function updatedIdPrograma(){
        $this->reset('idperiodos','idperiodo');
    }

    public function updatedIdFacultad(){
        $this->reset('idperiodos','idperiodo','idprograma');
    }

    public function refresh()
    {
        
    }

    public function mostrar()
    {
        $this->idperiodos = $this->idperiodo;
        
    }
}
