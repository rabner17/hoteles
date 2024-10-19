<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    //- fecha usuario habitacion estado (cancelada, a  ctiva, denegada) fecha de inicio fecha de fin observaciones
    protected $table = 'reserva';
    protected $fillable = [
        'usuario',
        'habitacion',
        'estado',
        'fecha_inicio',
        'fecha_fin',
        'observaciones',
    ];
}
