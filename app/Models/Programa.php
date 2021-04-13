<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Programa extends Model
{
    use HasFactory;

    public function facultades(){
        return $this->belongsTo(Facultade::class);
    }

    public function cursos(){
        return $this->hasMany(Curso::class);
    }
}
