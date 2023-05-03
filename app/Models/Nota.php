<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function temas()
    {
        return $this->belongsTo(Tema::class, 'id_tema');
    }

    protected $table = 'notas';
    protected $primaryKey = 'id';
    protected $fillable = ['titulo', 'nota', 'p_clave', 'resumen', 'id_usuario', 'id_tema'];
}
