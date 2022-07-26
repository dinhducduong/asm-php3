@extends('frontend.home_layout')
@section('content')
    <section class="pb-11 pt-7 bg-600">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h6 class="font-sans-serif text-primary fw-bold">Danh mục khóa học</h6>
                    <h1 class="mb-6">Danh sách khóa học</h1>
                    <form class="row g-3">
                        <div class="col-sm-6 col-md-3">
                            <label class="form-label" for="inputCategories">Danh mục</label>
                            <select class="form-select" id="inputCategories">
                                <option selected="selected">Select</option>
                            @foreach($cate as $key)
                                <option>{{$key->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <label class="form-label" for="inputLevel">Cấp bậc</label>
                            <select class="form-select" id="inputLevel">
                                <option selected="selected">Tất cả</option>
                                @foreach($level as $key)
                                    <option>{{$key->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <label class="form-label" for="inputLanguage">Ngôn ngữ</label>
                            <select class="form-select" id="inputLanguage">
                                <option selected="selected">Vietnamese</option>
                                <option value="1">English</option>
                                <option value="2">Bangla</option>
                                <option value="3">Hindi</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <label class="form-label" for="inputInstructor">Giảng Viên</label>
                            <select class="form-select" id="inputInstructor">
                                <option selected="selected">Tất cả giảng viên </option>
                                @foreach($teacher as $key)
                                    <option>{{ $key->name}}</option>
                                @endforeach
                            </select>
                            </select>
                        </div>
                        <div class="col-auto z-index-2">
                            <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pb-0" style="margin-top:-17rem">
        <div class="container">
            <div class="row">
                @foreach($data as $key)
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
                {{ $data->links() }}
            </div>
        </div><!-- end of .container-->

    </section>
@endsection
