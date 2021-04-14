<?php

namespace App\Http\Livewire\Modulos\Personas;

use App\Models\Persona;
use Livewire\Component;

class PersonasIndex extends Component
{
    public $buscador="";
    public $campo="id";
    public $direccion="desc";

    protected $listeners=['render'];

    public function render()
    {        
        $personas= Persona::where('estado','2')
                          ->where('nombres','like','%'.$this->buscador.'%')
                          ->orderBy($this->campo,$this->direccion)
                          ->latest('id')
                          ->paginate(10);
        return view('livewire.modulos.personas.personas-index',compact('personas'));
    }

    public function order($campo){
        if($this->campo==$campo){                        
            if ($this->direccion == 'desc') {
                $this->direccion = 'asc';
            } else {
                $this->direccion = 'desc';
            }

        }else{
            $this->campo=$campo;
            $this->direccion='desc';
        }                                
    }

    public function index(){
        return view('unis.modulos.personas.index');
    }
}
