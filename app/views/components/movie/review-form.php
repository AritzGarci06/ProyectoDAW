<div class="form-container">
    <form id="review-form" action="/proyectodaw/review/save/" method="post" autocomplete="off">
        <div class="form-group">
            <label for="movie-id" id="movie-id" class="d-none">Movie id
                <input class="form-control" type="number" name="movie-id" value="<?php echo $movie->id ?>">
            </label>
            <label for="review-id" class="d-none">Review id
                <input class="form-control" type="number" name="review-id" value="0">
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
                <textarea class="form-control" name="review" id="review" rows="4" placeholder="Escribe tu reseña aquí"
                          required></textarea>
            </label>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-light">Submit</button>
        </div>
    </form>
</div>
<div id="review-modal" class="form-container">
    <form id="review-form-modal" action="/proyectodaw/review/save/" method="post" autocomplete="off">
        <div class="form-group">
            <label for="movie-id" id="movie-id" class="d-none">Movie id
                <input class="form-control" type="number" name="movie-id" value="<?php echo $movie->id ?>">
            </label>
            <label for="review-id" class="d-none">Review id
                <input id="input-id" class="form-control" type="number" name="review-id" value="">
            </label>
            <label for="subject">Asunto
                <input id="input-subject" class="form-control" type="text" name="subject" placeholder="Asunto"
                       required>
            </label>
            <label for="rating">Valoración
                <input id="input-rating" class="form-control" type="number" name="rating" min="0" max="5"
                       placeholder="0" required>
            </label>
        </div>
        <div class="form-group">
            <label for="review">Reseña
                <textarea id="input-review" class="form-control" name="review" rows="4"
                          placeholder="Escribe tu reseña aquí" required></textarea>
            </label>
        </div>
        <div class="d-flex justify-content-end gap-2">
            <button type="submit" class="btn btn-light">Submit</button>
            <button id="cancel-form" class="btn btn-danger">Cancel</button>
        </div>
    </form>
</div>