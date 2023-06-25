<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Marca extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'imagem'
    ];

    // relacionamento entre tabelas
    public function modelos() {
        return $this->hasMany('App\Models\Modelo');
    }
}
