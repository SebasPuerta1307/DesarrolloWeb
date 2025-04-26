<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entregable extends Model
{
    use HasFactory;

    protected $table = 'entregables';

    protected $fillable = [
        'COD_entregable',
        'nombre_entregable',
        'descripcion_entregable',
        'COD_proyecto',
    ];

    // Relación: Un entregable pertenece a un proyecto
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'COD_proyecto', 'COD_proyecto');
    }

    // Relación: Un entregable puede tener muchos tipos
    public function tipos()
    {
        return $this->belongsToMany(TipoEntregable::class, 'entregable_tipo_entregable', 'COD_entregable', 'COD_tipoentregable');
    }
}
