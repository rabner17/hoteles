<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    protected $table = 'pagos'; //- fecha monto referencia (numero) metodo (efectivo, tarjeta, transferencia) entidad entidad_id observaciones
    protected $fillable = [
        'fecha',
        'monto',
        'referencia',
        'metodo',
        'entidad',
        'entidad_id',
        'observaciones',
    
    ];
}
