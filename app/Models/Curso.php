<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    public function programas(){
        return $this->belongsTo(Programa::class);
    }

    public function planEstudios(){
        return $this->belongsTo(planEstudio::class);
    }

    public function ciclos(){
        return $this->belongsTo(Ciclo::class);
    }

    public function preRequisitos(){
        return $this->belongsTo(PreRequisito::class);
    }

    public function cursoGrupos(){
        return $this->hasMany(CursoGrupo::class);
    }
}
