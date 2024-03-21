<?php

namespace controller;
use core\Controller;

class Home extends Controller
{
    public function index($name = '', $other = '')
    {
        $data = ['name' => 'Contenido'];
        require_once('../app/views/home/index.php');
        $this->view('home/index', $data);
    }

}