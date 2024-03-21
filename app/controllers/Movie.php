<?php

namespace controller;
include_once "../app/model/entity/Movie.php";
include_once "../app/model/dao/DaoMovie.php";
include_once "../app/model/services/MovieService.php";

use core\Controller;
use models\services\MovieService;

class Movie extends Controller
{
    //HTTP REQUESTS
    public function index()
    {
        print_r(MovieService::getMovies());
    }
    public function findOne($id = '')
    {
        print_r(MovieService::getMovie($id));
    }

    public function save()
    {
        $body = file_get_contents("php://input");
        $movie = \model\entity\Movie::jsonToObj($body);
        MovieService::setMovie($movie);
    }

    public function update()
    {
        $body = file_get_contents("php://input");
        $movie = \model\entity\Movie::jsonToObj($body);
        MovieService::updateMovie($movie);
    }
    public function delete($id)
    {
        MovieService::deleteMovie($id);
    }
}