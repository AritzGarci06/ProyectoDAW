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
        $logged = CheckLog::checkLog();
        $data['logged'] = $logged;
        if($logged){
            $arr = $movieService->getFavoriteMovies($_SESSION['user_id']);
            $arrInt = [];
            foreach ($arr as $obj){
                $arrInt[] = $obj->id;
            }
            $data['favoriteMovies'] = $arrInt;
        }
        $this->view('moviesList', $data);
    }

    public function findOne($id = '')
    {
        unset($_POST);
        $movie = $this->model('movie')->getMovie($id);
        $reviews = $this->model('review')->getReviews($id);
        $data = array();
        $data['logged'] = CheckLog::checkLog();
        $data['user_id'] = $_SESSION["user_id"] ?? 0;
        $data['movie'] = $movie;
        $data['tags'] = $movie->genres;
        $data['reviews'] = $reviews;
        $this->view('movie', $data);
    }

    public function saveFavoriteMovie($movieId)
    {
        if (CheckLog::checkLog()) {
            $movieService = $this->model('movie');

            $flag = $movieService->findFavoriteMovie($_SESSION['user_id'], $movieId);
            if ($flag) {
                $response = $movieService->deleteFavoriteMovie($_SESSION['user_id'], $movieId);
            } else {
                $response = $movieService->setFavoriteMovies($_SESSION['user_id'], $movieId);
            }

            if ($response) {
                $answer = array(
                    'status' => 'success',
                    'message' => 'Cambios Guardados',
                );
            } else {
                $answer = array(
                    'status' => 'error',
                    'message' => 'Los cambios no han sido guardados',
                );
            }

            header('Content-Type: application/json');
            echo json_encode($answer);
        }

    }
}