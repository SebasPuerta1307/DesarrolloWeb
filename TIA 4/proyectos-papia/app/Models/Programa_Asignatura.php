<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa_Asignatura extends Model
{
    use HasFactory;

    protected $table = 'programa_asignatura';

    public $incrementing = false;

    protected $fillable = [
        'COD_programa',
        'COD_asignatura',
    ];
}
