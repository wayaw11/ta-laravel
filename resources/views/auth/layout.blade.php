<!DOCTYPE html>
<html lang="en">

@include('frame.head')

<body class="bg-dark">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </main>
        </div>
        @include('frame.foot')
    </div>
    @include('frame.lib')
</body>

</html>
