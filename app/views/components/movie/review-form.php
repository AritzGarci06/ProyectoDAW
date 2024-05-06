<div class="form-containerr">
    <form action="#" method="post">
        <div class="form-group">
            <label for="subject" id="subject">Asunto
                <input class="form-control" type="text" name="subject" placeholder="Asunto">
            </label>
            <label for="rating">Valoración
                <input class="form-control" type="number" name="rating" min="0" max="5" placeholder="0">
            </label>
        </div>
        <div class="form-group">
            <label for="review">Reseña
                <textarea class="form-control" name="review" id="review" rows="4" placeholder="Escribe tu reseña aquí"></textarea>
            </label>
        </div>
        <button type="submit" class="btn btn-light">Submit</button>
    </form>
</div>