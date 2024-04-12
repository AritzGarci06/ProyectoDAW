<?php

class GenreEntity
{
    public string $id;
    public string $genre;

    /**
     * @param string $id
     * @param string $genre
     */
    public function __construct(string $id, string $genre)
    {
        $this->id = $id;
        $this->genre = $genre;
    }

    public static function arrayToObj($row)
    {
        return new GenreEntity(
            $row["genre_id"] ?? '',
            $row["genre_name"] ?? ''
        );
    }

    public static function getGenreArray($arr){
        $list = array();
        foreach ($arr as $item){
            $list[] = $item->genre;
        }
        return $list;
    }
}