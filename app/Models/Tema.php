<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;

    public function asignaturas() {
        return $this->belongsTo(Asignatura::class,'id_asignatura');
    }

    public function notas() {
        return $this->hasMany(Nota::class,'id_tema');
    }
}
