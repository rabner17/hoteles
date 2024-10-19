<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;
    // - id_alquiler id_usuario fecha estado (se hizo, no se hizo, observaciones) observaciones tipo (in / out)
    protected $table = 'movimiento';
    protected $fillable = [
        'id_alquiler',
        'id_usuario',
        'fecha',
        'estado',
        'observaciones',
        'tipo',
    ];
}
