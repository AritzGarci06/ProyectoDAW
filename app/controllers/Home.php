<?php

class Home extends Controller
{
    public function index()
    {
        $movies = $this->model('movie')->getMovies();
        $data = array();
        $data['movies'] = $movies;
        $data['logged'] = CheckLog::checkLog();
        $this->view('index', $data);
    }



}