<?php

class BackdropEntity
{
    public string $link;
    public string $movie_id;

    public function __construct( string $link, string $imdb_id)
    {
        $this->link = $link;
        $this->movie_id = $imdb_id;
    }

    public static function arrayToObj($row)
    {
        return new BackdropEntity(
            $row['link'] ?? '',
            $row['movie_id'] ?? ''
        );
    }

}