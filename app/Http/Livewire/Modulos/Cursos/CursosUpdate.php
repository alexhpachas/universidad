<?php

namespace App\Http\Livewire\Modulos\Cursos;

use App\Models\Curso;

use Livewire\Component;

class CursosUpdate extends Component
{
    public $open=false;
    public $curso;

    protected $rules=[
        'curso.codigo'=>'required',
        'curso.nombre'=>'required',
        'curso.horas_teoricas'=>'required',
        'curso.horas_practicas'=>'required',
        'curso.creditos'=>'required',
        'curso.tipo'=>'required',        
    ];

    public function mount(Curso $curso){
        $this->curso=$curso;
    }

    public function actualizar(){
        $this->validate();
        
        $this->curso->save();

        $this->emitTo('modulos.cursos.cursos-index','render');
        
        $this->emit('update');
        $this->reset('open');
    }

    public function render()
    {            
        return view('livewire.modulos.cursos.cursos-update');
    }
}
