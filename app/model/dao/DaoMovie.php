<?php

namespace dao;

use entity\Movie;
use MySQLBD;

class DaoMovie
{
    public function findAll()
    {
        $result = MySQLBD::queryRead("SELECT * FROM movie");
        $list = array();
        foreach ($result as $row) {
            $list[] = Movie::arrayToObj($row);
        }
        return $list;
    }

    public function findById($id)
    {
        $result = MySQLBD::queryRead("SELECT * FROM movie WHERE imdb_id = ?", $id);
        if (count($result) < 1) {
            return null;
        }
        return Movie::arrayToObj($result[0]);
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
}