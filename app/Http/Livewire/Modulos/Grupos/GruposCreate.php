<?php

namespace App\Http\Livewire\Modulos\Grupos;

use App\Models\Grupo;
use Livewire\Component;

class GruposCreate extends Component
{

    public $open = false;
    public $nombre;

    protected $rules=([
        'nombre'=>'required|max:10|unique:ciclos'
    ]);

    public function guardar(){

        $this->validate();

        Grupo::create([
            'nombre'=>$this->nombre
        ]);

        $this->reset('open','nombre');
        $this->emit('render');
    }



    public function render()
    {
        return view('livewire.modulos.grupos.grupos-create');
    }
}
