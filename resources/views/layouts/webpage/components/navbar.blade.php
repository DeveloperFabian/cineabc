<nav class="navbar navbar-expand navbar-light navbar-bg bg-dark">
    <div class="row ">
        <div class="col">
            <img src="https://cdn-icons-png.flaticon.com/512/2809/2809590.png" alt="" width="50">
        </div>
        <div class="col d-flex align-items-end">
            <h1 class="fw-bold text-white">CineABC</h1>
        </div>
    </div>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item me-5">
                <div class="row">
                    <div class="col d-flex align-items-center justify-content-center">
                        <span class="text-center text-white">Inicio</span>
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <span class="text-center text-white">Catalogo de peliculas</span>
                    </div>
                    @auth
                        <div class="col d-flex align-items-center justify-content-center">
                            <span class="text-center text-white">Mi historial</span>
                        </div>
                    @endauth
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                @auth
                    <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                        <img src="https://cdn-icons-png.flaticon.com/512/3541/3541871.png"
                            class="avatar img-fluid rounded me-1" alt="Charles Hall" />
                        <span class="text-white">{{ Auth::user()->name }}</span>
                    </a>
                @else
                <div class="row">
                    <div class="col d-flex align-items-center justify-content-center">
                        <a href="javascript:;" class="text-decoration-none text-white fw-bold mt-2" data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar sesión</a>
                    </div>
                </div>
                @endauth
                <div class="dropdown-menu dropdown-menu-end bg-dark">
                    <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                            data-feather="user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i>
                        Analytics</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i>
                        Settings & Privacy</a>
                    <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i>
                        Help Center</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Log out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
