<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body class="bg-warning-subtle bg-gradient">

    @include('layout.navbar')
    <!-- end nav -->
    <main class="pt-5">
        @yield('content')
    </main>
    <!-- footer -->
    @include('layout.foot')

    <!--  -->
</body>
@include('layout.lib')

</html>
