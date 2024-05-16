<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 360px;
            padding-top: 10%;
            margin: 0 auto;
        }

        div.form-floating {
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <h2>Registro</h2>
    <p>Por favor rellene el formulario de registro.</p>
    <div id="message" class="alert d-none"></div>
    <form id="register-form" action="/proyectodaw/registration/registerUser/" method="post">
        <div class="form-floating">
            <input type="text" class="form-control" placeholder="username" name="username" required>
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" placeholder="name@example.com" name="email" required>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <select class="form-select" id="floatingSelect" name="user_profile" required>
                <option selected>Open this select menu</option>
                <option value="1">Basic</option>
                <option value="2">Premium</option>
                <option value="3">Admin</option>
            </select>
            <label for="floatingSelect">Type of user</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" placeholder="Password" name="user_password"
                   required>
            <label for="floatingPassword">Password</label>
            <div class="mt-2">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-info-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                    </svg>
                </i>
                <span>Passwords must be at least 8 characters.</span>
            </div>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" placeholder="Confirm Password" name="re_user_password" required>
            <label for="floatingPassword">Re-enter Password</label>
        </div>
        <input type="submit" class="btn btn-primary" value="Registro">
        <!--        <input type="reset" class="btn btn-secondary ml-2" value="Reset">-->
    </form>
    <p class="mt-3">Ya tienes una cuenta? <a href="/proyectodaw/registration/login/">Log In</a>.</p>
</div>
</body>
<script src="<?php echo ROUTE_URL ?>/js/registration/register.js"></script>
</html>