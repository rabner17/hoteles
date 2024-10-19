<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    use HasFactory;
    protected $table = 'alquiler';
  
    protected $fillable = [
        'usuario',
        'habitacion',
        'fecha_inicio',
        'fecha_fin',
        'costo_base',
        'costo_diferido',
        'estado',
    ];


}
