<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProyecto extends Model
{
    use HasFactory;

    protected $table = 'tipo_proyectos';

    protected $primaryKey = 'COD_tipo_proyecto';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'tipo_proyecto',
    ];
}
