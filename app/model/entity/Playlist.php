<?php

namespace entity;

class Playlist
{
    public int $user_id;
    public string $imdb_id;
    public string $name_playlist;
    public \DateTime $date_timestamp;

    /**
     * @param int $user_id
     * @param string $imdb_id
     * @param string $name_playlist
     * @param \DateTime $date_timestamp
     */
    public function __construct(int $user_id, string $imdb_id, string $name_playlist, \DateTime $date_timestamp)
    {
        $this->user_id = $user_id;
        $this->imdb_id = $imdb_id;
        $this->name_playlist = $name_playlist;
        $this->date_timestamp = $date_timestamp;
    }

    public static function arrayToObj($row)
    {
        return new Playlist(
            $row["user_id"] ?? 0,
            $row["imdb_id"] ?? '',
            $row["name_playlist"] ?? '',
            $row["date_timestamp"] ?? new \DateTime('now')
        );
    }

}