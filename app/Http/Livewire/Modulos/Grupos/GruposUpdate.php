<?php

namespace App\Http\Livewire\Modulos\Grupos;

use App\Models\Grupo;
use Livewire\Component;

class GruposUpdate extends Component
{
    public $open=false;
    public $grupo;
    
    protected $rules=[
        'grupo.nombre'=>'required ',
    ];


    public function mount(Grupo $grupo){

        $this->grupo = $grupo;

    }

    public function actualizar(){
        $this->validate();

        $this->grupo->save();

        /* Reseteamos el Modal a false para ocultarlo */
        $this->reset('open');

        /* Renderiso la vista ese render es recibidoo desde el componente live wire index  */
        $this->emit('render');

        /* Emito un mensaje llamado update -> lo recibira el sweet alert para mostrar una alerta */
        $this->emit('update');
    }
    public function render()
    {
        return view('livewire.modulos.grupos.grupos-update');
    }
}
