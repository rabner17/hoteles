<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;
    //- numero descripcion imagen precio
    protected $table = 'habitaciones';
    protected $fillable = [
        'numero',
        'descripcion',
        'imagen',
        'precio',
    ];
}
