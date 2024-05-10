<!DOCTYPE html>
<html lang="en">
<head>
    <title>Film Fan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ROUTE_URL ?>/css/moviesList/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php require_once ROUTE_APP . "/views/inc/header.php" ?>
<body>
<div id="body-container" class="container mt-3" >
    <div id="input-container" class="input-group">
        <span class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                 viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>
        </span>
        <input id="input-search" name="input-search" class="form-control" type="text" placeholder="Search...">
    </div>
    <div id="content-container">
        <?php require_once ROUTE_APP . "/views/components/movieList/genreFilter.php" ?>
        <?php require_once ROUTE_APP . "/views/components/movieList/moviesListDisplay.php" ?>
    </div>
</div>


</body>
<?php require_once ROUTE_APP . "/views/inc/footer.php" ?>
<script src="<?php echo ROUTE_URL ?>/js/moviesList/main.js"></script>
</html>