<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <img src="https://cdn-icons-png.flaticon.com/512/3541/3541871.png"
                        class="avatar img-fluid rounded me-1" alt="Charles Hall" />
                    <span class="text-dark">{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{ route('home') }}">Volver a la webpage</a>
                    <form action="{{ route('logout') }}" method="post" id="logout-form">
                        @csrf
                        <a class="dropdown-item" href="javascript:;" id="logout-link">Log out</a>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>

<script>
    const logoutLink = document.getElementById('logout-link');
    const logoutForm = document.getElementById('logout-form');

    logoutLink.addEventListener('click', () => {
        logoutForm.submit();
    });
</script>
