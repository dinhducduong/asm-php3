@extends('frontend.home_layout')
@section('content')
<section class="pb-11 pt-7 bg-600">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h6 class="font-sans-serif text-primary fw-bold">Chi tiết khóa học</h6>
                <h1 class="mb-6">{{$detail_course[0]->title}}</h1>
            </div>
        </div>
    </div><!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->



<!-- ============================================-->
<!-- <section> begin ============================-->
<section style="margin-top:-21.5rem">

    <div class="container">
        <div class="row">
            <div class="col-md-8"><img class="w-100" src="{{$detail_course[0]->image}}" alt="..." />
                <h1 class="my-4">Mô tả</h1>
                <p>{{$detail_course[0]->description_long}}</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Đã đăng kí </strong>: {{$count_order}} Học viên</li>
                        <li class="list-group-item"><strong>Giảng viên </strong>: {{$detail_course[0]->name}}</li>
                        <li class="list-group-item"><strong>Bài giảng </strong>: {{$data_count_course_user}}</li>
                        <li class="list-group-item"><strong>Cấp bậc </strong>: {{$detail_course[0]->title_levels}}</li>
                        <li class="list-group-item"><strong>Danh mục </strong>: {{$detail_course[0]->title_cate}}</li>
                        <li class="list-group-item"><strong>Giá </strong>: {{$detail_course[0]->price}} $</li>
                        <li class="list-group-item">
                            <form method="post">
                                @csrf
                                <button type="submit" name="btnSub" class="btn btn-danger">Đăng kí
                                    khóa học</button>
                            </form>
                            <p class="text-muted mb-0 mt-4">Liên hệ với giảng viên</p><a class="text-info"
                                href="#">{{$detail_course[0]->email}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- end of .container-->
</section>
<!-- <section> close ============================-->
<!-- ============================================-->
@endsection
