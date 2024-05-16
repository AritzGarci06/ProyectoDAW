<?php

class Review extends Controller
{
    public function save()
    {
        if (
            isset($_POST["subject"]) &&
            isset($_POST["rating"]) &&
            isset($_POST["review"]) &&
            isset($_POST["user-id"])
        ) {
            $reviewController = $this->model('review');
            $obj = new ReviewEntity(
                $_POST["review-id"],
                $_POST["movie-id"],
                $_POST["user-id"],
                $_POST["rating"],
                $_POST["subject"],
                $_POST["review"],
                date(DATIME_FORMAT)
            );
            $reviewController->setReview($obj);
        }
    }

    public function delete($reviewId, $movieId)
    {
        $this->model('review')->deleteReview($reviewId, $movieId);
    }
}