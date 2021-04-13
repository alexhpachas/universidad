<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZoomUsuario extends Model
{
    use HasFactory;

    public function sesionZooms(){
        return $this->hasMany(SesionZoom::class);
    }
}
