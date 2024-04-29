<section id="display-list-movies">
    <div class="container d-grid justify-content-center">
        <div class="list-container">
            <div class="no-movies">
                <h4>No se han encontrado películas</h4>
            </div>
            <?php foreach ($movies as $movie): ?>
                <div class="movie">
                    <div class="movie-container">
                        <div>
                            <a href="/tfg/movie/findOne/<?php echo $movie->id ?>">
                                <img class="image-fluid poster" src="<?php echo $movie->poster ?>" alt="...">
                            </a>
                        </div>
                        <div>
                            <h4>
                                <a href="/tfg/movie/findOne/<?php echo $movie->id ?>">
                                <?php echo $movie->title ?>
                                </a>
                            </h4>
                            <p class="genres"><?php echo implode(", ",$movie->genres)?></p>
                            <p class="release-date"><?php echo substr($movie->releaseDate, 0, 4) ?></p>
                            <i class="fa fa-star"></i><span class="px-1">5.5</span>
                            <p class="body"><?php echo $movie->body ?></p>
                        </div>
                    </div>
                    <hr>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>