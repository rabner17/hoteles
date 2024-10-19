<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    //- nombre Tipo
    protected $table = 'servicios';
    protected $fillable = [
        'nombre',
        'tipo',
    ];
}
