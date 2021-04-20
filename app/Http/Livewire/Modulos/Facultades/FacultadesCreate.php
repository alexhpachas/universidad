<?php

namespace App\Http\Livewire\Modulos\Facultades;

use App\Models\Entidade;
use App\Models\Facultade;
use Livewire\Component;

class FacultadesCreate extends Component
{
    public $open = false;
    public $nombre;
    public $codigo;
    public $abreviatura;
    public $entidade_id=1;

    protected $listener=['render'];

    protected $rules=([
        'nombre'=>'required|unique:facultades',
        'codigo'=>'required|unique:facultades',
        'abreviatura'=>'required',
        'entidade_id'=>'required',
    ]);

    public function guardar(){

        $this->validate();

        Facultade::create([
            'nombre'=>$this->nombre,
            'codigo'=>$this->codigo,
            'abreviatura'=>$this->abreviatura,
            'entidade_id'=>$this->entidade_id
        ]);

        $this->reset('open','nombre','codigo','abreviatura','entidade_id');
        $this->emitTo('modulos.facultades.facultades-index','render');
        $this->emit('create');
    }

    public function render()
    {
        $entidades = Entidade::all();
        return view('livewire.modulos.facultades.facultades-create',compact('entidades'));
    }
}
