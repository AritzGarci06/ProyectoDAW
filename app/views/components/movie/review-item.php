<?php
foreach ($reviews as $review) {
    ?>
    <div class="review-item">
        <div class="row">
            <div class="col-1">
                <img class="img-fluid rounded-circle" src="<?php echo ROUTE_URL ?>/img/userIcon.jpg" alt="...">
            </div>
            <div class="col">
                <i>&#9733;</i>
                <span class="fs-5"><?php echo $review->rating ?></span>
                <span>/5</span>
                <h5><?php echo $review->title_review ?></h5>
                <span><?php echo $review->username ?></span>
                <span><?php echo $review->date_timestamp ?></span>
            </div>
        </div>
        <div class="row">
            <p class="review"><?php echo $review->body ?> </p>
        </div>
    </div>
    <?php
}
?>