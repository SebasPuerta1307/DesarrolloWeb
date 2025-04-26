<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $table = 'docentes';

    protected $fillable = [
        'COD_docente',
        'nombre_1',
        'nombre_2',
        'apellido_1',
        'apellido_2',
        'telefono_1',
        'telefono_2',
        'correo_electronico',
        'institucion_docente',
        'departamento_docente',
        'facultad_docente',
    ];

    // Relación: Un docente puede estar asociado a muchos proyectos
    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class, 'proyecto_docente', 'COD_docente', 'COD_proyecto');
    }
}
