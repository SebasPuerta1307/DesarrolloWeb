<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Era extends Model
{
    use HasFactory;

    protected $table = 'eras';

    protected $fillable = [
        'COD_ERA',
        'numero_ERA',
        'descripcion_ERA',
    ];

    // Relación: Una ERA puede estar asociada a muchos proyectos
    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class, 'proyecto_era', 'COD_ERA', 'COD_proyecto');
    }

    // Relación: Una ERA puede tener muchas IRAs
    public function iras()
    {
        return $this->hasMany(Ira::class, 'COD_ERA', 'COD_ERA');
    }
}
