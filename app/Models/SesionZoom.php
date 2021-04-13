<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SesionZoom extends Model
{
    use HasFactory;

    public function horarios(){
        return $this->belongsTo(Horario::class);
    }

    public function zoomUsers(){
        return $this->belongsTo(ZoomUsuario::class);
    }
}
