<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Film Fan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 360px;
            padding-top: 10%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <h2>Login</h2>
    <p>Por favor ingrese sus credenciales.</p>
    <div id="message-error" class="alert alert-danger d-none">Invalid username or password.</div>
    <form id="login-form" action="/proyectodaw/registration/checkuser/" method="post">
        <div class="form-group">
            <label for="username">Nombre de Usuario
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" required>
            </label>
            <!--                <input type="text" name="username" class="form-control -->
            <?php //echo (!empty($username_err)) ? 'is-invalid' : ''; ?><!--" value="-->
            <?php //echo $username; ?><!--">-->
            <!--                <span class="invalid-feedback">--><?php //echo $username_err; ?><!--</span>-->
        </div>
        <div class="form-group">
            <label for="password">Contraseña
                <input type="password" name="password" class="form-control" required>
            </label>
            <!--                <input type="password" name="password" class="form-control -->
            <?php //echo (!empty($password_err)) ? 'is-invalid' : ''; ?><!--">-->
            <!--                <span class="invalid-feedback">--><?php //echo $password_err; ?><!--</span>-->
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Login">
        </div>
        <p>No tienes una cuenta? <a href="/proyectodaw/registration/register/">Registrate</a></p>
    </form>
</div>
</body>
<script src="<?php echo ROUTE_URL ?>/js/registration/login.js"></script>
</html>