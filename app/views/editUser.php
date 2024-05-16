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
<body>
<div class="display">
    <div class="container rounded bg-white">
        <div id="message" class="alert d-none mt-2"></div>
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5"
                         width="150px"
                         src="<?php echo ROUTE_URL ?>/img/userIcon.jpg">
                    <span class="font-weight-bold"><?php echo $user->username ?></span>
                    <span class="text-black-50"><?php echo $user->mail ?></span>
                </div>
            </div>
            <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <form id="edit-form" action="/proyectodaw/user/save/" method="post">
                        <div class="row mt-3">
                            <div class="col-md-12 d-none">
                                <label for="user_id" class="labels">Username</label>
                                <input id="user_id" name="user_id" type="text" class="form-control"
                                       placeholder="enter username"
                                       value="<?php echo $user->user_id ?>"
                                       readonly>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label for="username" class="labels">Username</label>
                                <input id="username" name="username" type="text" class="form-control"
                                       placeholder="enter username"
                                       value="<?php echo $user->username ?>"
                                readonly>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label for="email" class="labels">Email</label>
                                <input id="email" name="mail" type="email" class="form-control"
                                       placeholder="enter email"
                                       value="<?php echo $user->mail ?>">
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit">
                                    Save
                                    Profile
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="<?php echo ROUTE_URL ?>/js/user/script.js"></script>
</html>
