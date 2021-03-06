<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreRequisito extends Model
{
    use HasFactory;

    public function cursoPlane(){
        return $this->hasOne(CursoPlaneCiclo::class);
    }
}
