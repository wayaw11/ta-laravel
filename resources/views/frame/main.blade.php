<!DOCTYPE html>
<html lang="en">

@include('frame.head')

<body class="sb-nav-fixed">
    @include('frame.navbar')
    <div id="layoutSidenav">
        @include('frame.sidebar')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 pt-3">
                    @yield('content')
                </div>
            </main>
            @include('frame.foot')
        </div>
    </div>
    @include('frame.lib')
</body>

</html>
