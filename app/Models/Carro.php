<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    protected $fillable = [
        'modelo_id',
        'placa',
        'disponivel',
        'km',
    ];

    // relacionamento entre tabelas
    public function modelo() {
        return $this->belongsTo('App\Models\Carro');
    }
}
