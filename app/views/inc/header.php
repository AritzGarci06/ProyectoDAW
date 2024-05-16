<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container">
            <a class="navbar-brand" href="/proyectodaw/">FILMFAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/proyectodaw/movie/">Movies</a>
                    </li>
                    <?php if(isset($logged) && $logged):?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/proyectodaw/user/">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a id="logout-link" class="nav-link" href="/proyectodaw/registration/logout/">Cerrar Sesión</a>
                    </li>
                    <?php else:?>
                    <li class="nav-item">
                        <a id="login-link" class="nav-link" href="/proyectodaw/registration/">Iniciar Sesión</a>
                    </li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </nav>
</header>