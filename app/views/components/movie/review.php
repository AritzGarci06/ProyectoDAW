<section id="review-section" class="text-light">
    <div class="container">
        <div class="content-container">
            <hr>
            <div class="row">
                <h2>Reseñas</h2>
            </div>
            <div class="row">
                <?php include_once ROUTE_APP . "/views/components/movie/review-form.php" ?>
            </div>
            <hr>
            <div class="row review-container">
                <?php if (!isset($reviews) || empty($reviews)): ?>
                    <h5>No hay reseñas</h5>
                <?php else: ?>
                    <?php include_once ROUTE_APP . "/views/components/movie/review-item.php" ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
