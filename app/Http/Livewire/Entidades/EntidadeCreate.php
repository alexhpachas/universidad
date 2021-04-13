<?php

namespace App\Http\Livewire\Entidades;

use App\Models\Entidade;
use Livewire\Component;

class EntidadeCreate extends Component
{
    public $open = false;
    public $nombre;

    protected $rules=([
        'nombre'=>'required|max:10|unique:entidades'
    ]);

    public function guardar(){

        $this->validate();

        Entidade::create([
            'nombre'=>$this->nombre
        ]);

        $this->reset('open','nombre');
        $this->emit('render');
    }

    public function render()
    {
        return view('livewire.entidades.entidade-create');
    }
}
