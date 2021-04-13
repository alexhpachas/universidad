<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Entidade extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function facultades(){
        return $this->hasMany(Facultade::class);
    }
}
