<section id="hero" class="mt-2">
    <div class="container">
        <div id="hero-container">
            <div id="title-container" class="row">
                <h1 id="title" class="text-light"><?php echo $movie->title ?></h1>
                <p class="text-white-50"><?php echo $movie->releaseDate ?></p>
            </div>
            <div id="btn-container" class="mb-2">
                <?php
                foreach ($tags as $tag) {
                    ?>
                    <button class="buttons-genres"><?php echo $tag ?></button>
                    <?php
                }
                ?>
                <button type="button" class="buttons-genres">
                    <a href='<?php echo $movie->trailerLink ?>' target='_blank'>WATCH
                        TRAILER</a>
                </button>
            </div>
            <div id="hero-container-img" class="row">
                <div id="poster" class="col-3 col-sm-12 p-0">
                    <img src="<?php echo $movie->poster ?>" alt="...">
                </div>
                <div id="carouselExampleRide" class="carousel slide col-9 col-sm-12 p-0" data-bs-ride="true">
                    <div class="carousel-inner">
                        <?php
                        foreach ($movie->backdrops as $index => $backdrop) {
                            $active = ($index == 0) ? 'active' : '';
                            ?>
                            <div class="carousel-item  <?php echo $active ?>">
                                <div class="backdrop">
                                    <img src="<?php echo $backdrop->link ?>" class="d-block w-100 img-fluid" alt="...">
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="mt-2">
            <p class="text-light lh-lg"><?php echo $movie->body?></p>
            </div>
        </div>
    </div>
</section>
