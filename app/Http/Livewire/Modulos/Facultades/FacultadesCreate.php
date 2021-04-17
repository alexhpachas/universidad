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

    protected $rules=([
        'nombre'=>'required|max:10|unique:facultades',
        'codigo'=>'required|min:2|unique:facultades',
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
        $this->emit('render');
        $this->emit('create');
    }

    public function render()
    {
        $entidades = Entidade::all();
        return view('livewire.modulos.facultades.facultades-create',compact('entidades'));
    }
}
