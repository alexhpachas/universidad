<?php

namespace App\Http\Livewire\Modulos\Programas;

use App\Models\Programa;
use Livewire\Component;
use Livewire\WithPagination;


class ProgramasIndex extends Component
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
        $programas= Programa::where('estado','2')
                            ->where('nombre','like','%'.$this->buscador.'%')
                            ->orderBy($this->campo,$this->direccion)                                                        
                            ->paginate(10);
        return view('livewire.modulos.programas.programas-index',compact('programas'));
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
        
        return view('unis.modulos.programas.index');
    }

    
}
