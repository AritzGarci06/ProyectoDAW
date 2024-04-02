<?php

namespace controller;
include_once "../app/model/entity/Movie.php";
include_once "../app/model/dao/DaoMovie.php";
include_once "../app/model/services/MovieService.php";
include_once "../app/model/entity/Backdrops.php";
include_once "../app/model/dao/DaoBackdrops.php";
include_once "../app/model/entity/Review.php";
include_once "../app/model/dao/DaoReview.php";
include_once "../app/model/services/ReviewService.php";

use core\Controller;
use model\services\ReviewService;
use models\services\MovieService;

class Movie
{

    public function index($id = '')
    {
        $movie = MovieService::getMovie($id);
        $tags = explode(',',$movie->genres);
        $reviews = ReviewService::getReviews($id);
        require_once('../app/views/movie.php');
    }

    public function findOne($id = '')
    {
        $movie = MovieService::getMovies();
        $data = ['movie' => $movie];
        require_once('../app/views/movie/movie.php');
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