<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEntregable extends Model
{
    use HasFactory;

    protected $table = 'tipo_entregables';

    protected $fillable = [
        'COD_tipoentregable',
        'nombre_tipo_entregable',
        'descripcion_tipo_entregable',
    ];

    // Relación: Un tipo de entregable puede estar asociado a muchos entregables
    public function entregables()
    {
        return $this->belongsToMany(Entregable::class, 'entregable_tipo_entregable', 'COD_tipoentregable', 'COD_entregable');
    }
}
