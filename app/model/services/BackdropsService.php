<?php

namespace model\services;


use model\dao\DaoBackdrops;

class BackdropsService
{
    public static function getMovies(): array
    {
        $daoMovie = new DaoBackdrops();
        return $daoMovie->findAll();
    }
}