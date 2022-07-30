@extends('adminhtml.home_admin_layout')
@section('title', $title)
@section('content')
    <div class="card">
        <div class="row justify-content-end">
            <div class=""><h3 class="py-3 px-5">Manager Course</h3></div>
            <div class="py-3 px-5"><a class=" btn btn-primary" href="{{url('admin/course/add')}}" >Add New</a></div>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center mb-0">
                <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Teacher</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Level</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($courses as $key)
                <tr>
                    <td>
                        <div class="d-flex px-2">
                            <div>
                                <img src="{{$key->image}}" class="avatar avatar-sm rounded-circle me-2">
                            </div>
                            <div class="my-auto">
                                <h6 class="mb-0 text-xs">{{$key->title}}</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{$key->title_cate}}</p>
                    </td>
                    <td>
                <span class="badge badge-dot me-4">
                  <i class="bg-info"></i>
                  <span class="text-dark text-xs">{{$key->name_teacher}}</span>
                </span>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex align-items-center">
                            <span class="me-2 text-xs">{{$key->title_levels}}</span>
                        </div>
                    </td>
                    <td>${{$key->price}}</td>
                    <td class="align-middle">
                        <div class="dropdown">
                            <a href="#" class="btn dropdown-toggle " data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                <li>
                                    <a class="dropdown-item" href="{{url('admin/course/edit/'. $key->id)}}">
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{url('admin/course/delete/'. $key->id)}}">
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
                {{ $courses->links() }}
            </div>
        </div>
    </div>
@endsection
