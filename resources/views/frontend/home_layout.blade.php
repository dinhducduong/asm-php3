@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

@include('frontend/component/head')

<body>
    <!--    Main Content-->
    <main class="main" id="top">

        <!-- <section> begin ============================-->
        @include('frontend.component.header')

        @yield('content')

        <!-- <section> begin ============================-->
        <section>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-4 mb-5"><img src="{{asset('/assets/img/gallery/cta.png')}}" width="280"
                            alt="cta" /></div>
                    <div class="col-md-6 col-lg-5">
                        <h5 class="text-primary font-sans-serif fw-bold">Đăng kí ngay</h5>
                        <h1 class="mb-5">Nhận ngay<br />Mỗi bản cập nhập</h1>
                        <form class="row g-0 align-items-center">
                            <div class="col">
                                <div class="input-group-icon">
                                    <input class="form-control form-little-squirrel-control" type="email"
                                        placeholder="Nhập email" aria-label="email" /><i
                                        class="fas fa-envelope input-box-icon"></i>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary rounded-0" type="submit">Đăng kí ngay</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <section class="py-0" style="margin-top: -5.8rem;">
            <div class="container bg-danger">
                <div class="row justify-content-md-between justify-content-evenly py-4">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                        <p class="fs--1 my-2 fw-bold text-white">Bản quyền của &copy; Henry Company, 2021</p>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6">
                        <p class="fs--1 my-2 text-center text-md-end text-white"> Made with&nbsp;
                            <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                fill="#EB6453" viewBox="0 0 16 16">
                                <path
                                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z">
                                </path>
                            </svg>&nbsp;by&nbsp;<a class="fw-bold text-900 text-white">Henry </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- ===============================================-->
    @include('frontend/component/scripts')
</body>

</html>
