<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recordatorio extends Model
{
    use HasFactory;
    public function users() {
        return $this->belongsTo(User::class,'id_usuario');
    }

    protected $table = 'recordatorios';
    protected $primaryKey = 'id';
    protected $fillable = ['titulo', 'contenido', 'importancia', 'id_usuario'];
}
