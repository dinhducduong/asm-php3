@extends('adminhtml.home_admin_layout')
@section('title', $title)
@section('content')
<div class="card">
    <div class="row justify-content-end">
        <div class="">
            <h3 class="py-3 px-5">Manager Student</h3>
        </div>
    </div>
    <div class="">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $key)
                <tr>
                    <td>
                        <div>
                            <p class="text-xs font-weight-bold mb-0 px-2">#{{$key->id}}</p>
                        </div>
                    </td>
                    <td>
                        <div>
                            <p class="text-xs font-weight-bold mb-0 px-2">{{$key->name}}</p>
                        </div>
                    </td>
                    <td>
                        <div class="my-auto">
                            <h6 class="mb-0 text-xs">{{$key->email}}</h6>
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
            {{ $list->links() }}
        </div>
    </div>
</div>
@endsection
