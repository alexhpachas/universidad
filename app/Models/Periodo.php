<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function cursoGrupos(){
        return $this->hasMany(CursoGrupo::class);
    }

    public function CursoPlanePeriodo(){
        return $this->belongsTo(CursoPlanePeriodo::class);
    }
}
