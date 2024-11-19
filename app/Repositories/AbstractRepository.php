<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository  {

    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function selectAtributesRegisterRelated ($atributes) {
        $this->model = $this->model->with($atributes);
        // montagem da query
    }

    public function filter($filters) {
        $filters = explode(';', $filters);

        foreach($filters as $key => $conditions) {
            $c = explode(':', $conditions);
            $this->model = $this->model->where($c[0], $c[1], $c[2]);
            // montagem da query atualizada  'atualizando o estado do attributo'
        }
    }


    public function selectAtributes ($atributes) {
        $this->model = $this->model->selectRaw($atributes);
    }


    public function getResult() {   // funcção responsavel por retornar o estado atual do model
        return  $this->model->get();    
    }
}