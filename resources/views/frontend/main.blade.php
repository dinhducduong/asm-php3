@extends('frontend.home_layout')
@section('content')
    <section class="pt-6 bg-600" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="assets/img/gallery/hero-header.png" width="470" alt="hero-header" /></div>
                <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
                    <h4 class="fw-bold font-sans-serif">Trở thành bậc thầy guitar</h4>
                    <h1 class="fs-6 fs-xl-7 mb-5">Học guitar đệm hát cấp tốc trong vòng 30 ngày</h1><a class="btn btn-primary me-2" href="#!" role="button">Đăng kí ngay</a><a class="btn btn-outline-secondary" href="#!" role="button">Xem chi tiết</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0" style="margin-top:-5.8rem">

        <div class="container">
            <div class="row">
                <div class="card card-span bg-secondary">
                    <div class="card-body">
                        <div class="row flex-center gx-0">
                            <div class="col-lg-4 col-xl-2 text-center text-xl-start"><img src="assets/img/gallery/funfacts.png" width="170" alt="..." /></div>
                            <div class="col-lg-8 col-xl-4">
                                <h1 class="text-light fs-lg-4 fs-xl-5">Upcoming Our <span class="text-primary">Basic in Python </span>Course!</h1>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <h1 class="display-1 text-light text-center text-xl-end">11 : 02 : 45 : 21</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section>

        <div class="container">
            <div class="row">
                <h1 class="text-center mb-5"> Các khóa học nổi bật hàng đầu</h1>
                @foreach($data_cource as $key)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100"><img class="card-img-top w-100" src="{{$key->image}}" alt="courses" />
                            <div class="card-body">
                                <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">{{$key->title}}</h5>
                                <h4 class="text-danger">{{$key->price}} đ</h4>
                                <a class="text-muted fs--1 stretched-link text-decoration-none" href="{{ route('detail_course', ['id' => $key->id]) }}">{{$key->description_short}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="d-flex justify-content-end">
                {{ $data_cource->links() }}
            </div>
        </div><!-- end of .container-->
    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-0">

        <div class="container">
            <div class="row h-100 align-items-center">
                <div class="col-md-12 col-lg-6 h-100">
                    <div class="card card-span text-white h-100"><img class="w-100" src="assets/img/gallery/student-feedback.png" alt="..." />
                        <div class="card-body px-xl-5 px-md-3 pt-0">
                            <div class="d-flex flex-column align-items-center bg-200" style="margin-top:-2.4rem;">
                                <h5 class="mt-3 mb-0">Kimmie Vo</h5>
                                <p class="text-muted">Junior Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 h-100">
                    <h1 class="my-4">Học viên của khóa học<br /><span class="text-primary">Bình luận</span></h1>
                    <p>Tham gia các khóa học từ các giảng viên và trường đại học tốt nhất thế giới. Các khóa học bao gồm các bài tập được đánh giá tự động và được đồng nghiệp ghi lại, các bài giảng video và các diễn đàn thảo luận cộng đồng. Khi bạn hoàn thành một khóa học, bạn sẽ đủ điều kiện để nhận Chứng chỉ khóa học điện tử có thể chia sẻ với một khoản phí nhỏ.</p>
                    <div class="mt-6">
                        <h5 class="font-sans-serif fw-bold mb-3">Các khóa học mà Kimmie đã tham gia</h5>
                        <div class="card card-span bg-600">
                            <div class="card-body">
                                <div class="row flex-center gx-0">
                                    <div class="col-lg-4 col-xl-3 text-center text-xl-start"><img src="{{asset('/assets/img/gallery/art-design.png')}}" width="120" alt="courses" /></div>
                                    <div class="col-lg-8 col-xl-9">
                                        <h5 class="font-sans-serif fw-bold">Nghệ thuật và Thiết kế đồ họa</h5>
                                        <p class="text-muted fs--1">The Museum of Modern Art</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <section>
        <div class="bg-holder" style="background-image:url(assets/img/gallery/funfacts-2-bg.png);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 text-center mb-5"><img src="assets/img/gallery/published.png" height="100" alt="..." />
                    <h1 class="my-2">768</h1>
                    <p class="text-info fw-bold">COURSES PUBLISHED</p>
                </div>
                <div class="col-sm-6 col-lg-3 text-center mb-5"><img src="assets/img/gallery/instructors.png" height="100" alt="..." />
                    <h1 class="my-2">120</h1>
                    <p class="text-info fw-bold">EXPERT INSTRUCTORS</p>
                </div>
                <div class="col-sm-6 col-lg-3 text-center mb-5"><img src="assets/img/gallery/learners.png" height="100" alt="..." />
                    <h1 class="my-2">8300</h1>
                    <p class="text-info fw-bold">HAPPY LEARNERS</p>
                </div>
                <div class="col-sm-6 col-lg-3 text-center mb-5"><img src="assets/img/gallery/awards.png" height="100" alt="..." />
                    <h1 class="my-2">32</h1>
                    <p class="text-info fw-bold">AWARDS ACHIEVED</p>
                </div>
            </div>
        </div>
    </section>

@endsection
