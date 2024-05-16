<?php
class ReviewService
{
    public static function getReviews($id): array
    {
        $daoReview = new DaoReview();
        return $daoReview->findByMovieId($id);
    }
    public static function getReview($id): ?ReviewEntity
    {
        $daoReview = new DaoReview();
        return $daoReview->findById($id);
    }
    public static function setReview(ReviewEntity $obj)
    {
        $daoReview = new DaoReview();
        $daoReview->save($obj);
    }
    public static function deleteReview($reviewId, $movieId)
    {
        $daoReview = new DaoReview();
        $daoReview->delete($reviewId, $movieId);
    }
}