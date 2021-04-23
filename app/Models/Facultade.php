<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultade extends Model
{
    use HasFactory;
    
    protected $guarded=[];
    /* protected $guarded = ['id','created_at','updated_at']; */

    //RELACIONES NIVEL MODELOS

    public function entidades(){
        return $this->belongsTo(Entidade::class);
    }

    public function programa(){
        return $this->hasMany(Programa::class);
    }


    
}
