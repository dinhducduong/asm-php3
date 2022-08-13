<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function index(Request $request)
    {
        if (isset($_POST['btnSub'])) {
            $login = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            $validator = Validator::make(
                $request->all(),
                [
                    'email' => 'required|email',
                    'password' => 'required',
                ],
                [
                    'email.required' => 'Please enter your email',
                    'email.email' => 'Email invalidate',
                    'password.required' => 'Please enter password',
                ]
            );

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            if (Auth::attempt($login)) {
                return redirect('admin/dashboard');
            }
        }
        return view('frontend.auth.login');
    }

    public function register(Request $request)
    {
        if (isset($_POST['btnSub'])) {
            $params = [];
            $params['cols'] = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ];
            $validator = Validator::make(
                $request->all(),
                [
                    'email' => 'required|email|unique:users',
                    'password' => 'required',
                    'name' => 'required',
                ],
                [
                    'email.required' => 'Please enter your email',
                    'email.email' => 'Email invalidate',
                    'email.unique' => 'Email Unique',
                    'password.required' => 'Please enter password',
                    'name.required' => 'Please enter name',
                ]
            );
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            } else {
                $user = new User();
                $user->addUser($params);
                Session::flash('success', 'Đăng kí thành công');
                return redirect('login');
            }
        }
        return view('frontend.auth.register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function profile()
    {
        $QUERY = new Order();
        $data_user = $QUERY->getOrder();
        return view('frontend.auth.profile', [
            'data' => $data_user
        ]);
    }
}