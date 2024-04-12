<section id="filter-section" class="filter-section">
    <div class="header-filter">
        <h5>Filters</h5>
        <i class="fa fa-filter d-none" onclick="cleanList()"></i>
    </div>
    <ul class="list-group">
        <li class="list-group-item">
            <button class="btn" type="button" onclick="displayList('year')">
                Year
                <span id="counter-year" class="badge text-bg-primary rounded-pill d-none" >0</span>
            </button>
            <ul id="year" class="list-items list-not-active">
                <?php foreach ($years as $index => $year):
                    $listId = "id_year_" . $index
                    ?>
                    <hr>
                    <li id="<?php echo $listId ?>" class="list-year" onclick="activeList('<?php echo $listId ?>')">
                        <?php echo $year ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
        <li class="list-group-item">
            <button class="btn" type="button" onclick="displayList('genres')">
                Genres
                <span id="counter-genre" class="badge text-bg-primary rounded-pill d-none"><?php echo count($genres) ?></span>
            </button>
            <ul id="genres" class="list-items list-not-active">
                <?php foreach ($genres as $genre):
                    $listId = "id_genre_" . $genre->id
                    ?>
                    <hr>
                    <li id="<?php echo $listId ?>" class="list-genre" onclick="activeList('<?php echo $listId ?>')">
                        <?php echo $genre->genre ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
    </ul>
</section>
