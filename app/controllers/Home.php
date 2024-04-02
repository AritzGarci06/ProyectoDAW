<?php

namespace controller;
use core\Controller;
use models\services\MovieService;

include_once "../app/model/entity/Movie.php";
include_once "../app/model/dao/DaoMovie.php";
include_once "../app/model/services/MovieService.php";
include_once "../app/model/entity/Backdrops.php";
include_once "../app/model/dao/DaoBackdrops.php";
class Home
{
    public function index()
    {
        $movies = MovieService::getMovies();
        $css = '../app/views/css/home/style.css';
        $data = ['movies' => $movies];

        include_once('../app/views/index.php');
    }

}