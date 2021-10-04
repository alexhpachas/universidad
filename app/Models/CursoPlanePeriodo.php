<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoPlanePeriodo extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function cursoPlane(){ //Hace relacion a la tabla CursoPlaneCiclo
        return $this->belongsTo(CursoPlaneCiclo::class);
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

    public function cursoPlanePeriodoGrupo(){
        return $this->hasMany(CursoPlanePeriodoGrupo::class);
    }

    /* public function userCursos(){
        return $this->belongsToMany(User::class);
    } */

    /* public function horarios(){
        return $this->hasMany(Horario::class);
    } */
}
