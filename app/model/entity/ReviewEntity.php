<?php

class ReviewEntity
{
    public int $review_id;
    public string $movie_id;
    public int $user_id;
    public float $rating;
    public string $title_review;
    public string $body;
    public string $date_timestamp;
    public string $username;

    /**
     * @param int $review_id
     * @param string $movie_id
     * @param int $user_id
     * @param float $rating
     * @param string $title_review
     * @param string $body
     * @param string $date_timestamp
     * @param string $username
     */
    public function __construct(int $review_id, string $movie_id, int $user_id, float $rating, string $title_review, string $body, string $date_timestamp, string $username)
    {
        $this->review_id = $review_id;
        $this->movie_id = $movie_id;
        $this->user_id = $user_id;
        $this->rating = $rating;
        $this->title_review = $title_review;
        $this->body = $body;
        $this->date_timestamp = $date_timestamp;
        $this->username = $username;
    }


    public static function arrayToObj($row)
    {
        return new ReviewEntity(
            $row["review_id"] ?? 0,
            $row["movie_id"] ?? '',
            $row["user_id"] ?? '',
            $row["rating"] ?? 0.0,
            $row["title_review"] ?? '',
            $row["body"] ?? '',
            $row["date_timestamp"] ?? new DateTime('now'),
            $row["username"] ?? '',
        );
    }
}