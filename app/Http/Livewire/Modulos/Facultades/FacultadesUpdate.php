<?php

namespace App\Http\Livewire\Modulos\Facultades;

use App\Models\Entidade;
use App\Models\Facultade;
use Livewire\Component;

class FacultadesUpdate extends Component
{
    public $open=false;
    public $facultade;   
    
    public function mount(Facultade $facultade){
        $this->facultade=$facultade;
    }


    protected $rules=[
        'facultade.nombre'=>'required',
        'facultade.codigo'=>'required',
        'facultade.abreviatura'=>'required',
        'facultade.entidade_id'=>'required'
    ];
   
    public function actualizar(){
        $this->facultade->save();
        /* $this->emit('render'); */
        
        $this->emitTo('modulos.facultades.facultades-index','render');
        $this->reset('open');
        $this->emit('update');
    }
    public function render()
    {
        $entidades = Entidade::where('estado','2')->get();
        return view('livewire.modulos.facultades.facultades-update',compact('entidades'));
    }
}
