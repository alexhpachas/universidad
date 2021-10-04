<?php

namespace App\Http\Livewire\Modulos\CursoGrupos;

use App\Models\Curso;
use App\Models\CursoGrupo;

use App\Models\CursoPlaneCiclo;
use App\Models\CursoPlanePeriodo;
use App\Models\CursoPlanePeriodoGrupo;
use App\Models\Facultade;
use App\Models\Grupo;
use App\Models\Periodo;
use App\Models\PlanEstudio;
use App\Models\Programa;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Request;


class CursoGruposIndex extends Component
{
    public $idprograma, $idfacultad, $idplanestudio, $idplanestudios;
    public array $seleccionesCurso = [];
    public array $seleccionesCursoNombre = []; 
    public array $seleccionesSeccion = [];
    public $open=false;

    public $buscador;
    public $buscar;
    public $activo=false;
    public $cursos;

    public $dato;

    public $cursoPeriodo=0;
    public $cursoSeccion=0;

    /* VARIABLES A INSERTAR */

    public $curso_plane_id,$periodo_id,$user_id='1';


    protected $listeners = ['render'];

    protected $rules = [        
        
        'periodo_id'=>'required',
        
        'user_id'=>'required',
        'seleccionesSeccion'=>'required',
        'seleccionesCurso'=>'required'
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
        $cursoPlanes  = CursoPlaneCiclo::where('plan_estudio_id', $this->idplanestudios)->get();
        $grupos = Grupo::all();
        $periodos = Periodo::all();
        $this->cursos=Curso::where('nombre','like','%'.$this->buscar.'%')->take(3)->get();
    
        
        return view('livewire.modulos.curso-grupos.curso-grupos-index', compact('facultades', 'programas', 'planEstudios', 'cursoPlanes', 'grupos','periodos'));
    }

    /* FUNCION PARA GUARDAR UN REGISTRO EN LA TABLA CURSO_GRUPO */
    public function guardar(){        
        
        $this->validate();
        /* $total = Str::length($this->seleccionesCurso); */
        
        foreach ($this->seleccionesCurso as $seleccion => $value) {            
            $verificar = CursoPlanePeriodo::where('curso_plane_ciclo_id',$value)->where('periodo_id',$this->periodo_id)->first();
            /* $verificar2 = CursoPlanePeriodo::where('periodo_id',$this->periodo_id)->first(); */
            if (!$verificar) {                            
                $grupos = CursoPlanePeriodo::create([            
                    'periodo_id'=>$this->periodo_id,
                    'curso_plane_ciclo_id' => $value,
                    'user_id'=>auth()->user()->id

                ]);
                if ($this->seleccionesSeccion) {
                    $grupos->grupos()->attach($this->seleccionesSeccion);    
                    $this->cursoSeccion++;
                }

                $this->cursoPeriodo++;
            }
            //A B
            foreach ($this->seleccionesSeccion as $seccion => $values) {
                $verificar2 = CursoPlanePeriodoGrupo::where('grupo_id',$values)->where('curso_plane_periodo_id',$value)->first();

                if (!$verificar2) {
                    $verificar->grupos()->attach($values);    
                    $this->cursoSeccion++;
                }
                
            }
            
        }

        $this->reset('open','user_id','periodo_id','seleccionesCurso','seleccionesSeccion');
        $this->emit('create');
        
    
    }

    /* METODO SE EJECUTA AL CAMBIAR DATOS DEL COMBO */
    public function refresh()
    {
        $this->reset('idplanestudio', 'idplanestudios');
    }

    /* METODO QUE SE EJECUTA AL DAR CLICK EN EL BOTON CANCELAR DEL MODAL */
    public function resetear(){
        $this->reset('seleccionesCurso','open','seleccionesSeccion');
    }  

    /* FUNCION QUE SE EJECUTA AL PRECIONAR EL BOTON  "VER CURSOS" */
    public function mostrar()
    {
        $this->idplanestudios = $this->idplanestudio;
        $this->reset('seleccionesCurso');
    }


    public function index()
    {
        return view('unis.modulos.cursogrupos.index');
    }
}
