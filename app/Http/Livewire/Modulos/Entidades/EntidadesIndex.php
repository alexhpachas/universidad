<?php

namespace App\Http\Livewire\Modulos\Entidades;

use App\Models\Entidade;
use Livewire\Component;
use Livewire\WithPagination;

class EntidadesIndex extends Component
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
        $entidades = Entidade::where('estado','2')
                             ->where('nombre','like','%'.$this->buscador.'%')
                             ->orderBy($this->campo,$this->direccion)
                             ->paginate(10);
        return view('livewire.modulos.entidades.entidades-index',compact('entidades'));
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
        return view('unis.modulos.Entidades.index');
    }

    public function show($id){
        
        return $id;
    }

    public function edit($id){

        $entidades = Entidade::find($id);

    }
    
}
