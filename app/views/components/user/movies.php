<section>
    <h2 class="text-light text-center">Películas Favoritas</h2>
    <article class="mt-3">
<!--        --><?php //if (isset($movies) && !empty($movies)): ?>
            <div class="images-container scroll">
                <?php foreach ($movies as $movie): ?>
                    <img class="img-fluid rounded img-style" src="<?php echo $movie->poster ?>" alt="..."
                         onclick="redirect(<?php echo $movie->id ?>)">
                <?php endforeach; ?>
            </div>
<!--        --><?php //else: ?>
<!--            <p class="h4 text-light text-center no-movies bg-secondary rounded">No hay películas agregadas</p>-->
<!--        --><?php //endif; ?>
    </article>
</section>
