<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                {{-- <div class="sb-sidenav-menu-heading">Core</div> --}}
                <a class="nav-link {{ Request::is('manage') ? 'active disabled ' : '' }}" href="/manage">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link {{ Request::is('products*') ? 'active disabled ' : '' }}" href="/products">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-utensils"></i></div>
                    Produk
                </a>
                <a class="nav-link {{ Request::is('categories*') ? 'active disabled ' : '' }}" href="/categories">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-table-list"></i></div>
                    Kategori
                </a>
            </div>
        </div>
        {{-- <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div> --}}
    </nav>
</div>
