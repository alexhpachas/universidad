<?php

namespace App\Http\Livewire\Modulos\Probando;

use App\Models\Ciclo;
use Livewire\Component;

class ProbandoIndex extends Component
{
    public $codigo;
    public $nombre_ciclo;

    public $nombre;
    public $openE=false;
    public $open=false;
    /* MODULOS PERSONAS */
    public function render()
    {
        $ciclos = Ciclo::latest('id')->paginate();
        return view('livewire.modulos.probando.probando-index',compact('ciclos'));
    }

    protected $rules=[
        'nombre'=>'required'
    ];

    public function guardar(){
        $this->validate();
        Ciclo::create([
            'nombre'=>$this->nombre
        ]);
        
        $this->reset('open','nombre');
        $this->emit('create');
    }

    public function edit($id){    
        $ciclo = Ciclo::find($id);
        $this->codigo = $ciclo->id;
        $this->nombre_ciclo = $ciclo->nombre;
        $this->openE=true;                
    }

    public function actualizar(){
        $this->validate();

        $ciclo = Ciclo::find($this->codigo);
        $ciclo->update([
            'nombre'=>$this->nombre_ciclo
        ]);
        $this->reset('openE','codigo','nombre_ciclo');
        $this->emit('update');
    }

    public function eliminar($id){

        Ciclo::destroy($id);        
    }

    

    public function index(){
        return view('unis.modulos.probando.index');
    }
}
