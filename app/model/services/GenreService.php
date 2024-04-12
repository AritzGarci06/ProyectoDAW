<?php

class GenreService
{
    public static function getGenres(): array
    {
        $daoMovie = new DaoGenre();
        return $daoMovie->findAll();
    }
}