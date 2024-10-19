<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HabitacionServicio extends Model
{
    use HasFactory;
    protected $table = 'habitacion_servicio';
    protected $fillable = [
        'habitacion_id',
        'servicio_id',
    ];
}
