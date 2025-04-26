<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProyecto extends Model
{
    use HasFactory;

    protected $table = 'tipo_proyectos'; // O el nombre correcto si tu tabla es diferente
    protected $fillable = [
        'COD_tipo_proyecto',
        'nombre_tipo_proyecto', // Agrega los campos reales que tengas en tu migración de tipo_proyectos
        'descripcion_tipo_proyecto',
    ];

    // Relaciones
    public function proyectos()
    {
        return $this->hasMany(Proyecto::class, 'COD_tipo_proyecto', 'COD_tipo_proyecto');
    }
}
