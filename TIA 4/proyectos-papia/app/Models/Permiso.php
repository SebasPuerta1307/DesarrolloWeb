<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;

    protected $table = 'permisos';

    protected $fillable = [
        'COD_permiso',
        'nombre_permiso',
    ];

    // Relación: Un permiso puede estar asociado a muchos roles
    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'rol_permiso', 'COD_permiso', 'COD_rol');
    }
}
