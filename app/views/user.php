<!DOCTYPE html>
<html lang="es">
<head>
    <title>Film Fan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ROUTE_URL ?>/css/user/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<?php require_once ROUTE_APP . "/views/inc/header.php" ?>
<body>
<div class="container">
    <?php require_once ROUTE_APP . "/views/components/user/profile.php" ?>
    <hr style="color: white">
    <?php require_once ROUTE_APP . "/views/components/user/movies.php" ?>
</div>
</body>
<?php require_once ROUTE_APP . "/views/inc/footer.php" ?>
<script src="<?php echo ROUTE_URL ?>/js/user/script.js"></script>
</html>
