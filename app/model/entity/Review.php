<?php

namespace entity;

use DateTime;

class Review
{
    public int $reviewid;
    public string $imdb_id;
    public int $user_id;
    public float $rating;
    public string $body;
    public DateTime $date_timestamp;

    /**
     * @param int $reviewid
     * @param string $imdb_id
     * @param int $user_id
     * @param float $rating
     * @param string $body
     * @param DateTime $date_timestamp
     */
    public function __construct(int $reviewid, string $imdb_id, int $user_id, float $rating, string $body, DateTime $date_timestamp)
    {
        $this->reviewid = $reviewid;
        $this->imdb_id = $imdb_id;
        $this->user_id = $user_id;
        $this->rating = $rating;
        $this->body = $body;
        $this->date_timestamp = $date_timestamp;
    }

    public static function arrayToObj($row)
    {
        return new Review(
            $row["reviewid"] ?? 0,
            $row["imdb_id"] ?? '',
            $row["user_id"] ?? '',
            $row["rating"] ?? 0.0,
            $row["body"] ?? '',
            $row["date_timestamp"] ?? new DateTime('now')
        );
    }
}