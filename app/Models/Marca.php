<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Marca extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'imagem'];

    public function rules() {
        return  [
            'nome' => 'required|unique:marcas,nome,'.$this->id.'|min:3',  // parametro unico dentro da table marcas , nao pode ter registro de marcas repetindo atributo nome
            'imagem' => 'required|file|mimes:png,jpeg' //  validação do tipo de imagem , no caso apenas png e jpeg
        ];
        //  1) tabela
        //  2) nome da coluna  que será pesquisada na tabela
        //  3) id do registro que será desconsiderado na  pesquisa
    }

    public function feedback() {  // função de retorno de menssageria
        return [
            'required' => 'O campo :attribute é obrigatório',
            'imagem.mimes' => 'o arquivo deve ser do tipo PNG/JPEG',
            'nome.unique' => 'O nome da marca ja existe',
            'nome.min' => 'o nome deve ter no minimo 3 caracteres'
        ];
    }
}
