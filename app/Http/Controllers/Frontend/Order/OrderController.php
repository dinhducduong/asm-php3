<?php

namespace App\Http\Controllers\Frontend\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout()
    {
        return view('frontend.checkout.checkout_view');
    }
}