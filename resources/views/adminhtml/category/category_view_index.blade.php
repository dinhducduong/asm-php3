@extends('adminhtml.home_admin_layout')
@section('title', $title)
@section('content')
<div class="card">
    <div class="row justify-content-end">
        <div class="">
            <h3 class="py-3 px-5">Manager Category</h3>
        </div>
        <div class="py-3 px-5"><a class=" btn btn-primary" href="{{url('admin/category/add')}}">Add New</a></div>
    </div>
    <div class="table-responsive">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tile</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($category as $key)
                <tr>
                    <td>
                        <div>
                            <p class="text-xs font-weight-bold mb-0 px-2">#{{$key->id}}</p>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2">

                            <div>
                                <img src="{{$key->image?''. Storage::url($key->image): " $key->image"}}"
                                class="avatar avatar-sm rounded-circle me-2">
                            </div>
                            <div class="my-auto">
                                <h6 class="mb-0 text-xs">{{$key->title}}</h6>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex align-items-center">
                            <span class="me-2 text-xs">@php
                                if($key->status == 0){
                                echo "Disable";
                                }elseif($key->status == 1){
                                echo "Enable";
                                }
                                @endphp</span>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="dropdown">
                            <a href="#" class="btn dropdown-toggle " data-bs-toggle="dropdown"
                                id="navbarDropdownMenuLink2">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                <li>
                                    <a class="dropdown-item" href="{{url('admin/category/edit/'. $key->id)}}">
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{url('admin/category/delete/'. $key->id)}}">
                                        Delete
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex px-3">
            {{ $category->links() }}
        </div>
    </div>
</div>
@endsection
