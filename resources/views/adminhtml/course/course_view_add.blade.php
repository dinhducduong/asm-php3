@extends('adminhtml.home_admin_layout')
@section('title', $title)
@section('content')
    <div class="title">
        <h3 class="p-3">Add New Course</h3>
    </div>
    <div class="row p-3">
        <form method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Title</label>
                        <input name="title" type="text" class="form-control" placeholder="Title Course">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Category</label>
                        <select name="categories_id" class="form-control">
                            <option disabled selected>Select</option>
                            @foreach($cate as $key)
                                <option value="{{$key->id}}">{{$key->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Image</label>
                        <input name="image" class="form-control" type="file">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Level</label>
                        <select name="levels_id" class="form-control">
                            <option disabled selected>Select</option>
                            @foreach($levels as $key)
                                <option value="{{$key->id}}">{{$key->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Price</label>
                        <input name="price" type="text" placeholder="Price" class="form-control" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Teachers</label>
                        <select name="teachers_id" class="form-control">
                            <option disabled selected>Select</option>
                            @foreach($teachers as $key)
                                <option value="{{$key->id}}">{{$key->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description Short</label>
                        <textarea name="description_short" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description Long</label>
                        <textarea name="description_long" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="col">
                <button class="btn btn-danger" type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
