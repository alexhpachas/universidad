<?php

namespace App\Http\Livewire\Modulos\Grupos;

use App\Models\Grupo;
use Livewire\Component;

use Livewire\WithPagination;

class GruposIndex extends Component
{
    use WithPagination;

    
    public $buscador ="";
    public $campo='id';
    public $direccion='desc';

    protected $listeners=['render'];

    public function updatingbuscador(){
        $this->resetPage();
    }
    
    public function render()
    {
        $grupos = Grupo::where('estado','2')
                       ->where('nombre','like','%'.$this->buscador.'%')
                       ->orderBy($this->campo,$this->direccion)
                       ->latest('id')
                       ->paginate(10);
        return view('livewire.modulos.grupos.grupos-index',compact('grupos'));
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
        return view('unis.modulos.grupos.index');
    }
}
