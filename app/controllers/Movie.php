<?php

class Movie extends Controller
{

    public function index()
    {
        $movieService = $this->model('movie');
        $movies = $movieService->getMovies();
        $years = $movieService->getYears();
        $genres = $this->model('genre')->getGenres();
        $data = array();
        $data['movies'] = $movies;
        $data['genres'] = $genres;
        $data['years'] = $years;
        $this->view('moviesList', $data);
    }

    public function findOne($id = '')
    {
        unset($_POST);
        $movie = $this->model('movie')->getMovie($id);
        $reviews = $this->model('review')->getReviews($id);
        $data = array();
        $data['movie'] = $movie;
        $data['tags'] = $movie->genres;
        $data['reviews'] = $reviews;
        $this->view('movie', $data);
    }

    public function saveReview()
    {
        if(
            isset($_POST["subject"]) &&
            isset($_POST["rating"]) &&
            isset($_POST["review"])
        ){
           $reviewController = $this->model('review');
            $obj = new ReviewEntity(
                $_POST["movie-id"],
               2,
               $_POST["rating"],
               $_POST["subject"],
               $_POST["review"],
               "2024-06-19 22:15:00"
           );
            $reviewController->setReview($obj);
        }
        $this->findOne($_POST["movie-id"]);
        // $body = file_get_contents("php://input");
        // $movie = \model\entity\MovieEntity::jsonToObj($body);
        // MovieService::setMovie($movie);
    }

    public function update()
    {
        // $body = file_get_contents("php://input");
        // $movie = \model\entity\MovieEntity::jsonToObj($body);
        // MovieService::updateMovie($movie);
    }

    public function delete($id)
    {
        // MovieService::deleteMovie($id);
    }
}