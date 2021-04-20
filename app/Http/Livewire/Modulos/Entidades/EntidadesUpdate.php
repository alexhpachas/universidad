<?php

namespace App\Http\Livewire\Modulos\Entidades;

use Livewire\Component;

class EntidadesUpdate extends Component
{
    public $entidade;
    public $open;

    protected $rules=[
        'entidade.nombre'=>'required'
    ];

    public function mount($entidade){
        $this->entidade=$entidade;
    }    

    public function render()
    {
        return view('livewire.modulos.entidades.entidades-update');
    }

    public function actualizar(){

        $this->validate();
        $this->entidade->save();
        $this->reset('open');
        $this->emitTo('modulos.entidades.entidades-index','render');
        $this->emit('update');
    }

   
}
