<?php

namespace model\dao;

use model\config\MySQLBD;
use model\entity\Movie;

class DaoMovie
{
    public function findAll()
    {
        $resultMovies = MySQLBD::queryRead("SELECT * FROM movie");
        $daoBackdrops = new DaoBackdrops();
        $list = array();
        foreach ($resultMovies as $row) {
            $backdrops = $daoBackdrops->findByImdbId($row["imdb_id"]);
            $list[] = Movie::arrayToObj($row, $backdrops);
        }
        return $list;
    }

    public function findById($id)
    {
        $result = MySQLBD::queryRead("SELECT * FROM movie WHERE imdb_id = ?", $id);
        if (count($result) < 1) {
            return null;
        }
        $daoBackdrops = new DaoBackdrops();
        $backdrops = $daoBackdrops->findByImdbId($result[0]["imdb_id"]);
        return Movie::arrayToObj($result[0], $backdrops);
    }

    public function save(Movie $movie)
    {
        $query = "INSERT INTO movie VALUES (?,?,?,?,?,?)";
        MySQLBD::queryWrite(
            $query,
            $movie->imdb_id,
            $movie->title,
            $movie->releaseDate,
            $movie->trailerLink,
            $movie->genres,
            $movie->poster,
        );
    }

    public function update(Movie $movie)
    {
        $query = "UPDATE movie SET 
            title = ?,
            releaseDate = ?,
            trailerLink = ?,
            genres = ?,
            poster = ?
        WHERE imdb_id = ?";
        MySQLBD::queryWrite(
            $query,
            $movie->title,
            $movie->releaseDate,
            $movie->trailerLink,
            $movie->genres,
            $movie->poster,
            $movie->imdb_id,
        );
    }

    public function delete(string $id)
    {
        $query = "DELETE from movie WHERE imdb_id = ?";
        MySQLBD::queryWrite(
            $query,
            $id
        );
    }
}