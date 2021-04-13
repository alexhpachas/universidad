<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultade extends Model
{
    use HasFactory;

    //RELACIONES NIVEL MODELOS

    public function entidades(){
        return $this->belongsTo(Entidade::class);
    }

    public function programas(){
        return $this->hasMany(Programa::class);
    }


    
}
