<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ira extends Model
{
    use HasFactory;

    protected $table = 'iras';

    protected $fillable = [
        'COD_IRA',
        'descripcion_IRA',
        'nivel_dominio_IRA',
        'COD_ERA',
    ];

    // Relación: Una IRA pertenece a una ERA
    public function era()
    {
        return $this->belongsTo(Era::class, 'COD_ERA', 'COD_ERA');
    }
}
