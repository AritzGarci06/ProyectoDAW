<section id="review-section" class="text-light">
    <div class="coment">
        <textarea name="coment" id="coment" cols="50" rows="5"></textarea>
    </div>
    <div class="review-container">
        <?php if(empty($reviews)): ?>
            <h5>No hay comentarios</h5>
        <?php else: ?>
        <?php
        foreach ($reviews as $review) {
            ?>
            <div class="review-item">
                <hr>
                <div class="row pb-2">
                    <div class="clientImage col-1 ">
                        <img class="img-fluid" src="<?php echo ROUTE_URL ?>/img/userIcon.jpg" alt="...">
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
        <?php endif; ?>

    </div>
</section>
