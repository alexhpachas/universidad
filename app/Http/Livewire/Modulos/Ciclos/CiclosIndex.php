<?php

namespace App\Http\Livewire\Modulos\Ciclos;

use App\Models\Ciclo;
use Livewire\Component;
use Livewire\WithPagination;

class CiclosIndex extends Component
{
    use WithPagination;
    public $buscador ="";
    public $campo='id';
    public $direccion='desc';

    public function updatingbuscador(){
        $this->resetPage();
    }

    protected $listeners=['render'];

    public function render()
    {
        $ciclos = Ciclo::where('nombre','like','%'.$this->buscador.'%')
                       ->orderBy($this->campo,$this->direccion)
                       ->latest('id')
                       ->paginate(10);

        return view('livewire.modulos.ciclos.ciclos-index',compact('ciclos'));
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
        return view('unis.modulos.ciclos.index');
    }
}
