<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarcaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return  [
            'nome' => 'required|unique:marcas,nome,'.$this->id.'|min:3',  // parametro unico dentro da table marcas , nao pode ter registro de marcas repetindo atributo nome
            'imagem' => 'required|file|mimes:png,jpeg' //  validação do tipo de imagem , no caso apenas png e jpeg
        ];
    }
}
