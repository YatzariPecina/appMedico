<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_paciente',
        'seguimiento',
        'archivo',
        'extension',
        'tamaño_archivo'
    ];

    // En el modelo Expediente
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
