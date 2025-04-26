<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto_Era extends Model
{
    use HasFactory;

    protected $table = 'proyecto_era';

    public $incrementing = false;

    protected $fillable = [
        'COD_proyecto',
        'COD_ERA',
    ];
}
