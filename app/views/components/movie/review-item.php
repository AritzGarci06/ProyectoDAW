<?php foreach ($reviews as $review): ?>
    <div class="review-item pb-3">
        <div class="header-review">
            <div class="header-review-col d-flex">
                <div class="header-review-col-sub">
                    <img class="img-fluid rounded-circle" src="<?php echo ROUTE_URL ?>/img/userIcon.jpg" alt="...">
                </div>
                <div class="header-review-col-sub">
                    <p>
                        <i class="fs-3 checked">&#9733;</i>
                        <span id="rating-<?php echo $review->id ?>" class="fs-5"><?php echo $review->rating ?></span>
                        /5
                        <span id="title-<?php echo $review->id ?>" class="h5"><?php echo $review->title_review ?></span>
                    </p>
                    <p><?php echo $review->username . ' ' . $review->date_timestamp ?></p>
                </div>
            </div>
            <?php if (isset($user_id) && $user_id == $review->user_id): ?>
                <div id="btn-edit">
                    <button data-info="<?php echo $review->id ?>" class="edit-btn btn btn-secondary">Editar</button>
                    <button data-info="<?php echo $review->id ?>" data-movie="<?php echo $movie->id?>" class="delete-btn btn btn-danger">Borrar</button>
                </div>
            <?php endif; ?>
        </div>
        <div class="row mt-3">
            <p id="review-<?php echo $review->id ?>" class="review"><?php echo $review->body ?> </p>
        </div>
    </div>
<?php endforeach; ?>