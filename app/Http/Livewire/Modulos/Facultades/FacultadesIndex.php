<?php

namespace App\Http\Livewire\Modulos\Facultades;

use App\Models\Facultade;
use Livewire\Component;

use Livewire\WithPagination;

class FacultadesIndex extends Component
{
    use WithPagination;

    public $buscador;
    public $campo="id";
    public $direccion="desc";

    protected $listeners=['render'];

    public function updatingbuscador(){
        $this->resetPage();
    }

    public function render()
    {
        $facultades=Facultade::where('estado','2')
                             ->where('nombre','like','%'.$this->buscador.'%')
                             ->orderBy($this->campo,$this->direccion)
                             ->latest('id')
                             ->paginate(10);
        return view('livewire.modulos.facultades.facultades-index',compact('facultades'));
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
        return view('unis.modulos.facultades.index');
    }
}
