<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CursoPlanePeriodoGrupo extends Model
{
    use HasFactory;
    protected $table = 'curso_plane_periodo_grupo';

    public function grupo(){
        return $this->belongsTo(Grupo::class);
    }

    public function cursoPlanePeriodo(){
        return $this->belongsTo(cursoPlanePeriodo::class);
    }

    public function cursoPlaneCiclo(){
        return $this->cursoPlanePeriodo->belongsTo(cursoPlaneCiclo::class);
    }
}
