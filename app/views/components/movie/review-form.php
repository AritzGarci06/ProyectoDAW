<div class="form-container">
    <form id="review-form" action="/proyectodaw/review/save/" method="post" autocomplete="off">
        <div class="form-group">
            <label for="movie-id" id="movie-id" class="d-none">Movie id
                <input class="form-control" type="number" name="movie-id" value="<?php echo $movie->id?>">
            </label>
            <label for="subject" id="subject">Asunto
                <input class="form-control" type="text" name="subject" placeholder="Asunto" required>
            </label>
            <label for="rating">Valoración
                <input class="form-control" type="number" name="rating" min="0" max="5" placeholder="0" required>
            </label>
        </div>
        <div class="form-group">
            <label for="review">Reseña
                <textarea class="form-control" name="review" id="review" rows="4" placeholder="Escribe tu reseña aquí" required></textarea>
            </label>
        </div>
        <button type="submit" class="btn btn-light">Submit</button>
    </form>
</div>
