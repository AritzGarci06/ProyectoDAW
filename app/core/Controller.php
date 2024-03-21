<?php

namespace core;

class Controller
{
    //No me deja instanciar clase desde la carpeta services, solo desde la carpeta model
    public function model($model)
    {
        require_once('../app/model/services/'.$model.'.php');

        return $model;
    }

    public function view($view, $data = [])
    {
        require_once('../app/views/' . $view . '.php');
    }
}