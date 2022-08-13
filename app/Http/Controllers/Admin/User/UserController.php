<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers()
    {
        $QUERY = new User();
        $data = $QUERY->getUser();
        return view('adminhtml.user.user_view_index', [
            'title' => "Manage Users",
            'list' => $data
        ]);
    }
}