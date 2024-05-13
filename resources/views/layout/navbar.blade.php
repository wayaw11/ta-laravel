<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-gradient bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/"><img class="rounded-circle me-1" src="assets/img/logo.jpg" alt="Bootstrap"
                width="60" height="60" />
            <span class="nav-hover h5">Kobessah Kopi</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link nav-hover" href="menu.html">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-hover" href="/about">Tentang Kami</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="d-inline me-2">{{ $user->name }}</div><i class="fas fa-user fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex d-none">
                <a class="btn btn-warning" href="cart.html">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>
    </div>
</nav>
