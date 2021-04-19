<?php

namespace App\Http\Livewire\Modulos\Cursos;

use App\Models\Ciclo;
use App\Models\Curso;
use App\Models\PlanEstudio;
use App\Models\Programa;
use Livewire\Component;

class CursosCreate extends Component
{
    public $open=false;
    public $codigo,$nombre,$horas_teoricas,$horas_practicas,$creditos,$tipo;
    
    protected $rules=[
        'codigo'=>'required',
        'nombre'=>'required',
        'horas_teoricas'=>'required',
        'horas_practicas'=>'required',
        'creditos'=>'required',
        'tipo'=>'required',        
    ];
    
    public function render()
    {        
        return view('livewire.modulos.cursos.cursos-create');
    }

    public function guardar(){
        $this->validate();

        Curso::create([
            'codigo'=>$this->codigo,
            'nombre'=>$this->nombre,
            'horas_teoricas'=>$this->horas_teoricas,
            'horas_practicas'=>$this->horas_practicas,
            'creditos'=>$this->creditos,
            'tipo'=>$this->tipo,                    
        ]);

        $this->emit('render');
        $this->reset('open','codigo','nombre','horas_teoricas','horas_practicas','creditos','tipo');
        $this->emit('create');
    }
}
