<?php

namespace App\Http\Livewire\Modulos\Entidades;

use App\Models\Entidade;
use Livewire\Component;

class EntidadesCreate extends Component
{
    public $open = false;
    public $nombre;

    protected $rules=([
        'nombre'=>'required|unique:entidades'
    ]);
    
    public function render()
    {
        return view('livewire.modulos.entidades.entidades-create');
    }

    public function guardar(){

        $this->validate();

        Entidade::create([
            'nombre'=>$this->nombre
        ]);

        $this->reset('open','nombre');
        $this->emitTo('modulos.entidades.entidades-index','render');
        $this->emit('create');
    }

    public function cancelar(){
        $this->reset('open','nombre');
    }
}
