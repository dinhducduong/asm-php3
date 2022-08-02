@extends('adminhtml.home_admin_layout')
@section('title', $title)
@section('content')
<div class="title">
    <h3 class="p-3">Add New Category</h3>
</div>
<div class="row p-3">
    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Title</label>
                    <input value="{{old('title')}}" name=" title" type="text" class="form-control"
                        placeholder="Title Category">
                </div>
                @if ($errors->has('title'))
                <span class="text-danger"> {{ $errors->first('title') }}</span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Image</label><br>
                    <input type="file" name="image" accept="image/*" class="form-control-file" id="image">
                </div>
                @if ($errors->has('image'))
                <span class="text-danger"> {{ $errors->first('image') }}</span>
                @endif
            </div>
        </div>
        <div class="col">
            <button class="btn btn-danger" type="submit">Save</button>
        </div>
    </form>
</div>
@endsection
