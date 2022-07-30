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
                        <input type="text" class="form-control" placeholder="Title Course">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control">
                            <option>Select</option>
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Image</label>
                        <input class="form-control" type="file">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Level</label>
                        <select class="form-control">
                            <option>Select</option>
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" placeholder="Price" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description Short</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description Long</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="col">
                <button class="btn btn-danger" type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
