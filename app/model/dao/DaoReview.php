<?php

namespace model\dao;

use model\config\MySQLBD;
use model\entity\Review;

class DaoReview
{
    public function findAll()
    {
        $result = MySQLBD::queryRead("SELECT * FROM review");
        $list = array();
        foreach ($result as $row) {
            $list[] = Review::arrayToObj($row);
        }
        return $list;
    }

    public function findById($id)
    {
        $result = MySQLBD::queryRead("SELECT * FROM review WHERE reviewid = ?", $id);
        if (count($result) < 1) {
            return null;
        }
        return Review::arrayToObj($result[0]);
    }

    public function save(Review $review)
    {
        $query = "INSERT INTO review VALUES (?,?,?,?,?)";
        MySQLBD::queryWrite(
            $query,
            $review->imdb_id,
            $review->user_id,
            $review->rating,
            $review->body,
            $review->date_timestamp,
        );
    }

    public function update(Review $review)
    {
        $query = "UPDATE backdrops SET 
            imdb_id = ?,
            user_id = ?,
            rating = ?,
            body = ?,
            date_timestamp = ?
        WHERE reviewid = ?";
        MySQLBD::queryWrite(
            $query,
            $review->imdb_id,
            $review->user_id,
            $review->rating,
            $review->body,
            $review->date_timestamp,
            $review->reviewid,
        );
    }
}