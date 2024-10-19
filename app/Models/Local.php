<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;

    protected $table = 'locales';

    protected $fillable = [
        'nombre',
        'imagen',
        'direccion',
        'descripcion',
        'telefono',
        'website',
        'calificacion',
        'tipo',
    ];
}
