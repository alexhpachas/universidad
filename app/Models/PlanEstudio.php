<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanEstudio extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function cursoPlane(){
        return $this->hasMany(CursoPlane::class);
    }

    public function programa(){
        return $this->belongsTo(Programa::class);
    }
}
