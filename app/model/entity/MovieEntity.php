<?php

class MovieEntity
{
    public string $id;
    public string $title;
    public string $body;
    public float $score;
    public string $releaseDate;
    public string $trailerLink;
    public string $poster;
    public array $backdrops;
    public array $genres;

    /**
     * @param string $id
     * @param string $title
     * @param string $body
     * @param float $score
     * @param string $releaseDate
     * @param string $trailerLink
     * @param string $poster
     * @param array $backdrops
     * @param array $genres
     */
    public function __construct(string $id, string $title, string $body, float $score, string $releaseDate, string $trailerLink, string $poster, array $backdrops, array $genres)
    {
        $this->id = $id;
        $this->title = $title;
        $this->body = $body;
        $this->score = $score;
        $this->releaseDate = $releaseDate;
        $this->trailerLink = $trailerLink;
        $this->poster = $poster;
        $this->backdrops = $backdrops;
        $this->genres = $genres;
    }


    public static function arrayToObj($row, $backdrops, $genres)
    {
        return new MovieEntity(
            $row["movie_id"] ?? '',
            $row["title"] ?? '',
            $row["body"] ?? '',
            $row["score"] ?? 0,
            $row["release_date"] ?? '',
            $row["trailer_link"] ?? '',
            $row["poster"] ?? '',
            $backdrops,
            $genres
        );
    }

    public static function jsonToObj($json)
    {
        $obj = json_decode($json);
        $id = isset($obj->imdb_id) ? $obj->imdb_id : '';
        $title = isset($obj->title) ? $obj->title : '';
        $body = isset($obj->body) ? $obj->body : '';
        $score = isset($obj->score) ? $obj->score : '';
        $releaseDate = isset($obj->releaseDate) ? $obj->releaseDate : '1970-01-01';
        $trailerLink = isset($obj->trailerLink) ? $obj->trailerLink : '';
        $poster = isset($obj->poster) ? $obj->poster : '';
        $backdrops = isset($obj->backdrops) ? $obj->backdrops : '';
        $genres = isset($obj->genres) ? $obj->genres : '';
        return new MovieEntity(
            $id,
            $title,
            $body,
            $score,
            $releaseDate,
            $trailerLink,
            $poster,
            $backdrops,
            $genres
        );
    }

}