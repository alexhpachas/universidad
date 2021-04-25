<?php

namespace App\Http\Livewire\Modulos\Programas;

use App\Models\Facultade;
use App\Models\Programa;
use Livewire\Component;

class ProgramasUpdate extends Component
{
    public $open=false;
    public $programa;

    protected $rules=[
        'programa.nombre'=>'required',
        'programa.codigo'=>'required',
        'programa.abreviatura'=>'required',
        'programa.facultade_id'=>'required'
    ];

    public function mount(Programa $programa){
        $this->programa=$programa;
    }

    public function actualizar(){
    
        $this->programa->save();
        $this->emitTo('modulos.programas.programas-index','render');
        $this->reset('open');
        $this->emit('update');
    }


    public function render()
    {
        $facultades=Facultade::where('estado','2')->get();
        return view('livewire.modulos.programas.programas-update',compact('facultades'));
    }
}
