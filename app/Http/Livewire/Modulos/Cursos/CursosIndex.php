<?php

namespace App\Http\Livewire\Modulos\Cursos;

use App\Models\Curso;
use Livewire\Component;
use Livewire\WithPagination;

class CursosIndex extends Component
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
        $cursos = Curso::where('nombre','like','%'.$this->buscador.'%')
                       ->orderBy($this->campo,$this->direccion)
                       ->paginate(10);
        return view('livewire.modulos.cursos.cursos-index',compact('cursos'));
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
        return view('unis.modulos.cursos.index');
    }
}
