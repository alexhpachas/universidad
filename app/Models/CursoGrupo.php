<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoGrupo extends Model
{
    use HasFactory;

    public function cursoPlane(){
        return $this->belongsTo(CursoPlane::class);
    }

    public function periodos(){
        return $this->belongsTo(Periodo::class);
    }

    public function grupos(){
        return $this->belongsTo(Grupo::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function userCursos(){
        return $this->belongsToMany(User::class);
    }

    public function horarios(){
        return $this->hasMany(Horario::class);
    }

    
}
