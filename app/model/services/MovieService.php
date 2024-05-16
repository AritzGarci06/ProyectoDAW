<?php
class MovieService
{
    public static function getMovies(): array
    {
        $daoMovie = new DaoMovie();
       return $daoMovie->findAll();
    }
    public static function getMovie($id): MovieEntity
    {
        $daoMovie = new DaoMovie();
        return $daoMovie->findById($id);
    }
    public static function getYears(): array
    {
        $daoMovie = new DaoMovie();
        return $daoMovie->findAllYears();
    }

    public static function setMovie(Movie $movie)
    {
        $daoMovie = new DaoMovie();
        $daoMovie->save($movie);
    }
    public static function updateMovie(Movie $movie)
    {
        $daoMovie = new DaoMovie();
        $daoMovie->update($movie);
    }

    public static function deleteMovie($id)
    {
        $daoMovie = new DaoMovie();
        $daoMovie->delete($id);
    }

    public static function getFavoriteMovies($id)
    {
        $daoMovie = new DaoMovie();
        return $daoMovie->findFavoriteMovies($id);
    }

    public static function setFavoriteMovies(int $userId, $movieId)
    {
        $daoMovie = new DaoMovie();
        return $daoMovie->saveFavoriteMovies($userId, $movieId);
    }

    public static function findFavoriteMovie(int $userId, $movieId): bool
    {
        $daoMovie = new DaoMovie();
        return $daoMovie->findByUserIdAndByMovieId($userId, $movieId);
    }

    public static function deleteFavoriteMovie(int $userId, $movieId): bool
    {
        $daoMovie = new DaoMovie();
        return $daoMovie->deleteFavoriteMovie($userId, $movieId);
    }
}