<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramaAcademico extends Model
{
    use HasFactory;

    protected $table = 'programa_academicos';

    protected $fillable = [
        'COD_programa',
        'nombre_programa_academico',
    ];

    // Relación: Un programa académico puede estar asociado a muchas asignaturas
    public function asignaturas()
    {
        return $this->belongsToMany(Asignatura::class, 'programa_asignatura', 'COD_programa', 'COD_asignatura');
    }
}
