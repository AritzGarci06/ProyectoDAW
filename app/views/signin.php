<!DOCTYPE html>
<html lang="en">
<head>
    <title>Film Fan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ROUTE_URL ?>/css/registration/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<?php require_once ROUTE_APP . "/views/inc/header.php" ?>
<body>
<div class="container">
    <div class="object-container">

        <div id="signin-card">
            <p class="h1">Sign in</p>
            <button class="btn btn-primary w-50"><a class="no-style" href="/proyectodaw/registration/login/">
                    Inicia sesión
                </a>
            </button>
            <p class="line-effect">o</p>
            <button class="btn btn-secondary w-50">
                <a class="no-style" href="/proyectodaw/registration/register/">
                    Crea una cuenta nueva
                </a>
            </button>
        </div>
    </div>
</div>
</body>
<?php require_once ROUTE_APP . "/views/inc/footer.php" ?>
</html>