<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entregable_TipoEntregable extends Model
{
    use HasFactory;

    protected $table = 'entregable_tipo_entregable';

    public $incrementing = false;

    protected $fillable = [
        'COD_entregable',
        'COD_tipoentregable',
    ];
}
