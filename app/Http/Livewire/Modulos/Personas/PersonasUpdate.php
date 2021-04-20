<?php

namespace App\Http\Livewire\Modulos\Personas;

use App\Models\Persona;
use Livewire\Component;

class PersonasUpdate extends Component
{
    public $open=false;
    public $persona;

    protected $rules=[
        'persona.nombres'=>'required',
        'persona.apellidos'=>'required',
        'persona.dni'=>'required|max:8|min:8|regex:/^[0-9]+$/i',
        'persona.fecha_nacimiento'=>'required',
        'persona.email'=>'required',
        'persona.genero'=>'required'
    ];

    public function mount(Persona $persona){
        $this->persona=$persona;
    }

    public function actualizar(){
        $this->validate();

        $this->persona->save();
        
        $this->emitTo('modulos.personas.personas-index','render');
        $this->reset('open');
        $this->emit('update');

    }
    public function render()
    {
        return view('livewire.modulos.personas.personas-update');
    }
}
