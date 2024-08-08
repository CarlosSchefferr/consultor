<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Compromisso extends Model
{
    use HasFactory;

    protected $table = 'compromissos';

    protected $fillable = [
        'consultor_id',
        'data',
        'hora_inicio',
        'hora_fim',
        'intervalo',
    ];

    protected $dates = ['data']; // Adiciona 'data' para ser tratado como Carbon

    public function consultor()
    {
        return $this->belongsTo(Consultor::class, 'consultor_id');
    }
}

