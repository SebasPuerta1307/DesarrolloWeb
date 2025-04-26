<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'COD_usuario',
        'Nombre_ingreso_usuario',
        'contraseña_usuario',
        'correo_electronico',
        'COD_rol',
    ];

    // Relación: Un usuario tiene un rol
    public function rol()
    {
        return $this->belongsTo(Roles::class, 'COD_rol', 'COD_rol');
    }
}
