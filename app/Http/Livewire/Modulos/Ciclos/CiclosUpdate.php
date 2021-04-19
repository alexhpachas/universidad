<?php

namespace App\Http\Livewire\Modulos\Ciclos;

use Livewire\Component;

class CiclosUpdate extends Component
{
    public $open=false;
    /* Creamos esta variable para recibir los datos del registro a editar */
    public $ciclo;

    public function mount($ciclo){
        $this->ciclo=$ciclo;
    }

    protected $rules=[
        'ciclo.nombre'=>'required'
    ];

    public function actualizar(){
        $this->validate();
        $this->ciclo->save();
        $this->emit('render');
        $this->reset('open');
        $this->emit('update');
    }


    public function render()
    {
        return view('livewire.modulos.ciclos.ciclos-update');
    }
}
