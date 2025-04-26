<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = 'asignaturas';

    protected $fillable = [
        'COD_asignatura',
        'nombre_asignatura',
        'departamento_asignatura',
        'facultad_asignatura',
        'creditos_asignatura',
    ];

    // Relación: Una asignatura puede estar asociada a muchos programas
    public function programas()
    {
        return $this->belongsToMany(ProgramaAcademico::class, 'programa_asignatura', 'COD_asignatura', 'COD_programa');
    }

    // Relación: Una asignatura puede estar asociada a muchos proyectos
    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class, 'proyecto_asignatura', 'COD_asignatura', 'COD_proyecto');
    }
}
