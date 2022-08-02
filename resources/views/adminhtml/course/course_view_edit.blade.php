@extends('adminhtml.home_admin_layout')
@section('title', $title)
@section('content')
<div class="title">
    <h3 class="p-3">Edit Course</h3>
</div>
<div class="row p-3">
    <form method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Title</label>
                    <input value="{{$course_find->title}}" name="title" type="text" class="form-control"
                        placeholder="Title Course">
                </div>
                @if ($errors->has('title'))
                <span class="text-danger"> {{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Category</label>
                    <select name="categories_id" class="form-control">
                        <option disabled selected>Select</option>
                        @foreach($cate as $key)
                        <option value="{{$key->id}}" @selected($key->id == $course_find->categories_id) >{{$key->title}}
                        </option>
                        @endforeach
                    </select>
                </div>
                @if ($errors->has('categories_id'))
                <span class="text-danger"> {{ $errors->first('categories_id') }}</span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Image</label>
                    <input name="image" class="form-control" type="file">
                </div>
                @if ($errors->has('image'))
                <span class="text-danger"> {{ $errors->first('image') }}</span>
                @endif
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Level</label>
                    <select name="levels_id" class="form-control">
                        <option disabled selected>Select</option>
                        @foreach($levels as $key)
                        <option value="{{$key->id}}" @selected($key->id == $course_find->levels_id) >{{$key->title}}
                        </option>
                        @endforeach
                    </select>
                </div>
                @if ($errors->has('levels_id'))
                <span class="text-danger"> {{ $errors->first('levels_id') }}</span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Price</label>
                    <input value="{{$course_find->price}}" name="price" type="text" placeholder="Price"
                        class="form-control" />
                </div>
                @if ($errors->has('price'))
                <span class="text-danger"> {{ $errors->first('price') }}</span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description Short</label>
                    <textarea name="description_short" class="form-control" id="exampleFormControlTextarea1"
                        rows="3">{{$course_find->description_short}}</textarea>
                </div>
                @if ($errors->has('description_short'))
                <span class="text-danger"> {{ $errors->first('description_short') }}</span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description Long</label>
                    <textarea name="description_long" class="form-control" id="exampleFormControlTextarea1"
                        rows="3">{{$course_find->description_long}}</textarea>
                </div>
                @if ($errors->has('description_long'))
                <span class="text-danger"> {{ $errors->first('description_long') }}</span>
                @endif
            </div>
        </div>
        <div class="col">
            <button class="btn btn-danger" type="submit">Save</button>
        </div>
    </form>
</div>
@endsection
