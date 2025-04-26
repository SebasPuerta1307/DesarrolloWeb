<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyectoDocente extends Model
{
    use HasFactory;

    protected $table = 'proyecto_docente';

    public $incrementing = false;

    protected $fillable = [
        'COD_proyecto',
        'COD_docente',
    ];
}
