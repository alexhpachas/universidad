<?php

namespace App\Http\Livewire\Modulos\CursoPlanes;

use App\Models\Ciclo;
use App\Models\Curso;
use App\Models\PlanEstudio;
use Livewire\Component;

class CursoPlanesCreate extends Component
{
    public $planEstudio;

    public $programa;

    /* public $codigo; */ //variable para traer

    public $open=false; //Variable para abrir el modal

    /* protected $rules=[        
        'planEstudio.codigo'=>'required'
    ];
 */
    public function mount(PlanEstudio $planEstudio){

        $this->planEstudio=$planEstudio;
        if (isset($planEstudio->programa->nombre)) {
            $this->programa=$planEstudio->programa;            
            
        }
        
        
        
    }

    public function render()
    {
        $ciclos = Ciclo::all();
        $cursos = Curso::all();
        return view('livewire.modulos.curso-planes.curso-planes-create',compact('ciclos','cursos'));
    }
}
