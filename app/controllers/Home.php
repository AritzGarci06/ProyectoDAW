<?php

namespace controller;
use core\Controller;
use models\services\MovieService;

include_once "../app/model/entity/Movie.php";
include_once "../app/model/dao/DaoMovie.php";
include_once "../app/model/services/MovieService.php";
include_once "../app/model/entity/Backdrops.php";
include_once "../app/model/dao/DaoBackdrops.php";
class Home extends Controller
{
    public function index($name = '', $other = '')
    {
        $movies = MovieService::getMovies();
        $data = ['movies' => $movies];
        require_once('../app/views/home/index.php');
        $this->view('home/index', $data);
    }

}