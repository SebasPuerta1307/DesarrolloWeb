<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $table = 'proyectos';

    protected $fillable = [
        'COD_proyecto',
        'titulo_del_proyecto',
        'objetivo_proyecto',
        'orientacion_del_proyecto',
        'COD_tipo_proyecto',
        'fecha_inicio',
        'fecha_fin',
    ];

    // Relación: Un proyecto puede tener muchos entregables
    public function entregables()
    {
        return $this->hasMany(Entregable::class, 'COD_proyecto', 'COD_proyecto');
    }

    // Relación: Un proyecto puede tener muchos docentes
    public function docentes()
    {
        return $this->belongsToMany(Docente::class, 'proyecto_docente', 'COD_proyecto', 'COD_docente');
    }

    // Relación: Un proyecto puede estar asociado a muchas asignaturas
    public function asignaturas()
    {
        return $this->belongsToMany(Asignatura::class, 'proyecto_asignatura', 'COD_proyecto', 'COD_asignatura');
    }

    // Relación: Un proyecto puede estar asociado a muchas ERAs
    public function eras()
    {
        return $this->belongsToMany(Era::class, 'proyecto_era', 'COD_proyecto', 'COD_ERA');
    }
}
