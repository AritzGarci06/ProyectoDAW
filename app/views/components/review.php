<section id="review-section" class="text-light">
    <div class="review-container">

        <?php
        foreach ($reviews as $review) {
            ?>
            <div class="review-item">
                <hr>
                <div class="row">
                    <div class="col-1 clientImage">
                        <img src="" alt="...">
                    </div>
                    <div class="col-3">

                        <span><?php echo $review->username ?></span>
                        <div class="stars-container">
                            <span class="fa fa-star  checked"></span>
                            <span class="fa fa-star  checked"></span>
                            <span class="fa fa-star  checked"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p><?php echo $review->date_timestamp ?></p>
                </div>
                <div class="row">
                    <p class="review"><?php echo $review->body ?> </p>
                </div>
            </div>
            <?php
        }
        ?>

    </div>
</section>
