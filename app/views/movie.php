<!DOCTYPE html>
<html lang="en">
<head>
    <title>Film Fan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ROUTE_URL ?>/css/movie/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
</head>
<?php require_once ROUTE_APP . "/views/inc/header.php" ?>
<body>
<div id="blur-background"></div>
<?php require_once ROUTE_APP . "/views/components/movie/hero.php" ?>
<?php require_once ROUTE_APP . "/views/components/movie/review.php" ?>
<script src="<?php echo ROUTE_URL ?>/js/movie/main.js"></script>
</body>
<?php require_once ROUTE_APP . "/views/inc/footer.php" ?>
</html>