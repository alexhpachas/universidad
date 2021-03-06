<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function cursoPlane(){
        return $this->hasMany(CursoPlaneCiclo::class);
    }

    public function planEstudio(){
        return $this->belongsToMany(PlanEstudio::class);
    }

   
}
