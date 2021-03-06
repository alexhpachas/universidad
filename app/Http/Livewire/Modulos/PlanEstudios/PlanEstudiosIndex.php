<?php

namespace App\Http\Livewire\Modulos\PlanEstudios;

use App\Models\PlanEstudio;
use Livewire\Component;
use Livewire\WithPagination;

class PlanEstudiosIndex extends Component
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
        
        $planEstudios = PlanEstudio::where('estado','2')                                   
                                   ->whereHas('programa',function($query){
                                       $query->where('nombre','like','%'.$this->buscador.'%');
                                   })->orwhere('codigo','like','%'.$this->buscador.'%')
                                   ->orderBy($this->campo,$this->direccion)
                                   ->latest('id')
                                   ->paginate(10);
        return view('livewire.modulos.plan-estudios.plan-estudios-index',compact('planEstudios'));
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
        return view('unis.modulos.planestudios.index');
    }
}
