<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function programa(){
        return $this->belongsTo(Programa::class);
    }

    public function planEstudio(){
        return $this->belongsTo(planEstudio::class);
    }

    public function ciclo(){
        return $this->belongsTo(Ciclo::class);
    }

    public function preRequisito(){
        return $this->belongsTo(PreRequisito::class);
    }

    public function cursoGrupo(){
        return $this->hasMany(CursoGrupo::class);
    }
}
