<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensajes extends Model
{
    protected $fillable = [
        'documento',
        'numero_documento',
        'apellido_p',
        'apellido_m',
        'nombres',
        'distrito',
        'provincia',
        'departamento',
        'direccion',
        'correo',
        'celular',
        'moneda',
        'monto',
        'descripcion',
        'tipo',
        'detalle',
        'url_pdf'
    ];

    protected $table = 'reclamos';
}
