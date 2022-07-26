<!DOCTYPE html>
<html lang="en">

@include('adminhtml.component.head')

<body class="g-sidenav-show  bg-gray-100">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    @include('adminhtml.component.aside')
</aside>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        @include('adminhtml.component.navbar')
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
            @yield('content')
        <footer class="footer pt-3  ">
        </footer>
    </div>
</main>
<div class="fixed-plugin">
    @include('adminhtml.component.setting')
</div>
@include('adminhtml.component.scripts')
</body>

</html>
