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
        $movie = $this->model('movie')->getMovie($id);
//        $reviews = $this->model('review')->getReviews($id);
        $data = array();
        $data['movie'] = $movie;
        $data['tags'] = $movie->genres;
        $data['reviews'] = array();
        $this->view('movie', $data);
    }

    public function save()
    {
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