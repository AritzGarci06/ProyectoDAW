<?php

class DaoReview
{
    public function findAll()
    {
        $result = MySQLBD::queryRead("SELECT * FROM review");
        $list = array();
        foreach ($result as $row) {
            $list[] = ReviewEntity::arrayToObj($row);
        }
        return $list;
    }

    public function findById($id)
    {
        $result = MySQLBD::queryRead("SELECT * FROM review WHERE review_id = ?", $id);
        if (count($result) < 1) {
            return null;
        }
        return ReviewEntity::arrayToObj($result[0]);
    }

    public function findByMovieId($id)
    {
        $result = MySQLBD::queryRead("SELECT 
    review_id,    
    movie_id,
        r.user_id,
        rating,
        title_review,
        body,
        date_timestamp,
        username 
        FROM review as r join user_client as u on r.user_id = u.user_id
        where r.movie_id = ? order by date_timestamp desc;", $id);
        $list = array();
        foreach ($result as $row) {
            $list[] = ReviewEntity::arrayToObj($row);
        }
        return $list;
    }

    public function save(ReviewEntity $review)
    {
        $query = "INSERT INTO review(movie_id, user_id, rating, title_review, body, date_timestamp) VALUES (?, ?, ?, ?, ?, ?)";
        MySQLBD::queryWrite(
            $query,
            $review->movie_id,
            $review->user_id,
            $review->rating,
            $review->title_review,
            $review->body,
            $review->date_timestamp,
        );
    }

//    public function update(ReviewEntity $review)
//    {
//        $query = "UPDATE review SET
//            imdb_id = ?,
//            user_id = ?,
//            rating = ?,
//            body = ?,
//            date_timestamp = ?
//        WHERE reviewid = ?";
//        MySQLBD::queryWrite(
//            $query,
//            $review->imdb_id,
//            $review->user_id,
//            $review->rating,
//            $review->body,
//            $review->date_timestamp,
//            $review->review_id,
//        );
//    }
//
    public function delete($id)
    {
        $query = "DELETE from review WHERE review_id = ?";
        MySQLBD::queryWrite(
            $query,
            $id
        );
    }
}