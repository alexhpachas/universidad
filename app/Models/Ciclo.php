<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciclo extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function cursoPlane(){
        return $this->hasMany(CursoPlane::class);
    }
}
