<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id', 'data', 'preco', 'descricao'];

    // Relacionamento com o cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
