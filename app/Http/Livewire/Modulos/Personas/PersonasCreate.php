<?php

namespace App\Http\Livewire\Modulos\Personas;

use App\Models\Persona;
use Livewire\Component;

class PersonasCreate extends Component
{

    public $open = false;
    public $nombres;
    public $apellidos;
    public $dni;
    public $fecha_nacimiento;
    public $email;
    public $genero="Masculino";
    

    protected $rules=([
        'nombres'=>'required|max:10',
        'apellidos'=>'required|max:30',
        'dni'=>'required|max:8|min:8|regex:/^[0-9]+$/i|unique:personas',
        'fecha_nacimiento'=>'required',
        'email'=>'required|unique:personas',
        'genero'=>'required'
    ]);

    public function guardar(){

        $this->validate();

        Persona::create([
            'nombres'=>$this->nombres,
            'apellidos'=>$this->apellidos,
            'dni'=>$this->dni,
            'fecha_nacimiento'=>$this->fecha_nacimiento,
            'email'=>$this->email,
            'genero'=>$this->genero

        ]);

        $this->reset('open','nombres','apellidos','dni','fecha_nacimiento','email','genero');
        $this->emit('render');

        $this->emit('create');
    }
    public function cancelar(){
        

        $this->reset('open','nombres','apellidos','dni','fecha_nacimiento','email','genero');
        $this->emit('render');
        
    }


    public function render()
    {
        return view('livewire.modulos.personas.personas-create');
    }
}
