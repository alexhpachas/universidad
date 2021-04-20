<?php

namespace App\Http\Livewire\Modulos\Programas;

use App\Models\Facultade;
use App\Models\Programa;
use Livewire\Component;

class ProgramasCreate extends Component
{
    public $open=false;

    /* Creamos los campos de la tabla */
    public $nombre,$codigo,$abreviatura,$facultade_id=1;

    protected $rules=[
        'nombre'=>'required',
        'codigo'=>'required',
        'abreviatura'=>'required',
        'facultade_id'=>'required',
    ];

    public function guardar(){

        $this->validate();
        Programa::create([
            'nombre'=>$this->nombre,
            'codigo'=>$this->codigo,
            'abreviatura'=>$this->abreviatura,
            'facultade_id'=>$this->facultade_id
        ]);
        $this->emitTo('modulos.programas.programas-index','render');
        $this->reset('open','nombre','codigo','abreviatura');
        $this->emit('create');
        


    }
    public function render()
    {
        $facultades=Facultade::where('estado','2')->get();
        return view('livewire.modulos.programas.programas-create',compact('facultades'));
    }
}
