<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitado extends Model
{
    use HasFactory;

    protected $table = 'invitados';

    protected $fillable = [
        'COD_invitado',
        'nombre_1',
        'nombre_2',
        'apellido_1',
        'apellido_2',
        'telefono_1',
        'telefono_2',
        'correo_electronico',
        'institucion',
        'departamento',
        'facultad',
    ];
}
