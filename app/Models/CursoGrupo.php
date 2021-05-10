<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class CursoGrupo extends Model
{
    use HasFactory;
    protected $guarded=['created_at','updated_at'
];

    public function cursoPlane(){
        return $this->belongsToMany(CursoPlane::class);
    }

    public function periodos(){
        return $this->belongsTo(Periodo::class);
    }

    public function grupos(){
        return $this->belongsToMany(Grupo::class);
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
