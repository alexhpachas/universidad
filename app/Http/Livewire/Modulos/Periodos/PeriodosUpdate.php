<?php

namespace App\Http\Livewire\Modulos\Periodos;

use App\Models\Periodo;
use Livewire\Component;

class PeriodosUpdate extends Component
{
    public $open=false;
    public $periodo;

    protected $rules=[
        'periodo.nombre'=>'required|min:3',
    ];

    public function mount(Periodo $periodo){
        $this->periodo=$periodo;
    }

    public function actualizar(){
        $this->validate();
        $this->periodo->save();
        $this->reset('open');
        $this->emit('render');
        $this->emit('update');

    }
    
    public function render()
    {
        return view('livewire.modulos.periodos.periodos-update');
    }
}
