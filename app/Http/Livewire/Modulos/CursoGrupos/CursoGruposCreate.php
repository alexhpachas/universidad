<?php

namespace App\Http\Livewire\Modulos\CursoGrupos;

use App\Models\CursoPlane;
use App\Models\Grupo;
use Livewire\Component;

class CursoGruposCreate extends Component
{
    public $open=false;
    public $selected;
    public $datos=[];
    public $cursos=[];

    protected $listeners=['render'];

    public function mount(CursoPlane $cursoPlane){
        $this->datos[] = $cursoPlane->id;
        /* $this->cursos = array_merge($cursoPlane,$this->cursos); */
    }

    public function render()
    {
        $grupos= Grupo::all(); 
        return view('livewire.modulos.curso-grupos.curso-grupos-create',compact('grupos'));
    }
}
