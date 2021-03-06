<?php

namespace App\Http\Livewire\Modulos\CursoPlanes;

use App\Models\Ciclo;
use App\Models\Curso;
use App\Models\CursoPlaneCiclo;
use App\Models\PlanEstudio;
use Livewire\Component;

class CursoPlanesCreate extends Component
{
    public $planEstudio; //Capturamos los datos del plan estudio del otro componente live wire

    public $open=false; //Variable para abrir el modal

    public $programa;

    public $consulta;

    
    /* CAMPOS DE LA TABLA CURSOS_PLANES */
    public $curso_id=1,$plan_estudio_id,$ciclo_id=1,$codigo;

    protected $rules=[
        'planEstudio.codigo'=>'required',
        'curso_id'=>'required',                
        'plan_estudio_id'=>'required',
        'ciclo_id'=>'required',
    ];
    

    /* protected $rules=[        
        'planEstudio.codigo'=>'required'
    ];
 */
    public function mount(PlanEstudio $planEstudio){

        $this->planEstudio=$planEstudio; 
        $this->plan_estudio_id = $planEstudio->id;       
        
        if (isset($planEstudio->programa->nombre)) {
            $this->programa=$planEstudio->programa;                        
        }                        
    }

    public function guardar(){  
        $this->validate();      

        /* $consultaS = CursoPlaneCiclo::where('curso_id',$this->curso_id)->where('plan_estudio_id',$this->plan_estudio_id)->get(); */
        if (!isset($this->consulta->id)) {
        
            CursoPlaneCiclo::create([
                'curso_id'=>$this->curso_id,
                'plan_estudio_id'=>$this->plan_estudio_id,
                'ciclo_id'=>$this->ciclo_id
            ]);

            $this->emitTo('modulos.curso-planes.curso-planes-index','render');
            $this->emit('create');
            $this->reset('open','curso_id','plan_estudio_id','ciclo_id','codigo');
        }else{
            $this->emit('validate');
            $this->reset('open');
        }

     
        
    }

    public function render()
    {
        $ciclos = Ciclo::all();
        $cursos = Curso::all();
        $this->consulta = CursoPlaneCiclo::where('curso_id',$this->curso_id)->where('plan_estudio_id',$this->plan_estudio_id)->first();
        return view('livewire.modulos.curso-planes.curso-planes-create',compact('ciclos','cursos'));
    }
}
