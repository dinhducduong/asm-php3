<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
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