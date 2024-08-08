<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultor extends Model
{
    use HasFactory;

    // Nome da tabela se não seguir a convenção padrão
    protected $table = 'consultores';

    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'nome_completo',
        'valor_hora',
    ];

    // Define o relacionamento com a tabela de compromissos
    public function compromissos()
    {
        return $this->hasMany(Compromisso::class, 'consultor_id');
    }
}