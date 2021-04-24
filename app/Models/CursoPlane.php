<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoPlane extends Model
{
    use HasFactory;
    
    protected $guarded=[];
    

    public function planEstudio(){
        return $this->belongsTo(PlanEstudio::class);
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

    public function curso(){
        return $this->belongsTo(Curso::class);
    }
}
