<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyectoAsignatura extends Model
{
    use HasFactory;

    protected $table = 'proyecto_asignatura';

    public $incrementing = false;

    protected $fillable = [
        'COD_proyecto',
        'COD_asignatura',
    ];
}
