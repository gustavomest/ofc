<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'carro'];

    // Relacionamento com os serviços do cliente
    public function servicos()
    {
        return $this->hasMany(Servico::class);
    }
  
}
