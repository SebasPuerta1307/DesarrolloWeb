<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class REP extends Model
{
    use HasFactory;

    protected $table = 'reps';

    protected $fillable = [
        'COD_REP',
        'Descripcion',
        'COD_proyecto',
    ];

    // Relación: Un REP pertenece a un proyecto
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'COD_proyecto', 'COD_proyecto');
    }
}
