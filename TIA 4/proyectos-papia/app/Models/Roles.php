<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $fillable = [
        'COD_rol',
        'nombre_rol',
    ];

    // Relación: Un rol puede estar asociado a muchos usuarios
    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'COD_rol', 'COD_rol');
    }

    // Relación: Un rol puede tener muchos permisos
    public function permisos()
    {
        return $this->belongsToMany(Permiso::class, 'rol_permiso', 'COD_rol', 'COD_permiso');
    }
}
