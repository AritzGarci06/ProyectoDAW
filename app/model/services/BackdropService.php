<?php
class BackdropService
{
    public static function getBackdrops(): array
    {
        $daoMovie = new DaoBackdrop();
        return $daoMovie->findAll();
    }
}