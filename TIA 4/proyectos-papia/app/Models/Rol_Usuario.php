<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol_Usuario extends Model
{
    use HasFactory;

    protected $table = 'rol_usuario';

    public $incrementing = false;
    protected $fillable = [
        'COD_rol',
        'COD_usuario',
    ];

    // Relación: Un rol puede estar asociado a muchos usuarios
    public function rol()
    {
        return $this->belongsTo(Roles::class, 'COD_rol', 'COD_rol');
    }

    // Relación: Un usuario puede tener muchos roles
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'COD_usuario', 'COD_usuario');
    }
}
