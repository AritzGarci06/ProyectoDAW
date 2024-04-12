<?php

require_once '../app/model/entity/BackdropEntity.php';
require_once '../app/model/dao/DaoBackdrop.php';
require_once '../app/model/entity/GenreEntity.php';
require_once '../app/model/dao/DaoGenre.php';

class DaoMovie
{
    public function findAll()
    {
        $resultMovies = MySQLBD::queryRead("SELECT * FROM movie");
        $daoBackdrops = new DaoBackdrop();
        $daoGenre = new DaoGenre();
        $list = array();
        foreach ($resultMovies as $row) {
            $backdrops = $daoBackdrops->findById($row["movie_id"]);
            $genres = GenreEntity::getGenreArray($daoGenre->findById($row["movie_id"]));
            $list[] = MovieEntity::arrayToObj($row, $backdrops, $genres);
        }
        return $list;
    }

    public function findAllYears()
    {
        $resultMovies = MySQLBD::queryRead("select distinct year(release_date) as year from movie");
        $list = array();
        foreach ($resultMovies as $row) {
            $list[] = $row["year"];
        }
        return $list;
    }

    public function findById($id)
    {
        $result = MySQLBD::queryRead("SELECT * FROM movie WHERE movie_id = ?", $id);
        if (count($result) < 1) {
            return null;
        }
        $daoBackdrops = new DaoBackdrop();
        $daoGenre = new DaoGenre();
        $backdrops = $daoBackdrops->findById($result[0]["movie_id"]);
        $genres = GenreEntity::getGenreArray($daoGenre->findById($result[0]["movie_id"]));
        return MovieEntity::arrayToObj($result[0], $backdrops, $genres);
    }


    public function save(MovieEntity $movie)
    {
        $query = "INSERT INTO movie VALUES (?,?,?,?,?,?)";
        MySQLBD::queryWrite(
            $query,
            $movie->id,
            $movie->title,
            $movie->releaseDate,
            $movie->trailerLink,
            $movie->genres,
            $movie->poster,
        );
    }

    public function update(MovieEntity $movie)
    {
        $query = "UPDATE movie SET 
            title = ?,
            releaseDate = ?,
            trailerLink = ?,
            genres = ?,
            poster = ?
        WHERE movie_id = ?";
        MySQLBD::queryWrite(
            $query,
            $movie->title,
            $movie->releaseDate,
            $movie->trailerLink,
            $movie->genres,
            $movie->poster,
            $movie->id,
        );
    }

    public function delete(string $id)
    {
        $query = "DELETE from movie WHERE movie_id = ?";
        MySQLBD::queryWrite(
            $query,
            $id
        );
    }
}