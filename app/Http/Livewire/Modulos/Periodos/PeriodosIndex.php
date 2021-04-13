<?php

namespace App\Http\Livewire\Modulos\Periodos;

use App\Models\Periodo;
use Livewire\Component;
use Livewire\WithPagination;

class PeriodosIndex extends Component
{

    use WithPagination;

    public $buscador="";
    public $campo="id";
    public $direccion="desc";

    protected $listeners=['render'];

    public function updatingbuscador(){
        $this->resetPage();
    }

    public function render()
    {
 
        $periodos = Periodo::where('nombre','like','%'.$this->buscador.'%')
                            
                            ->orderBy($this->campo,$this->direccion)
                            ->paginate(10);
        return view('livewire.modulos.periodos.periodos-index',compact('periodos'));
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
        return view("unis.modulos.periodos.index");
    }
}
