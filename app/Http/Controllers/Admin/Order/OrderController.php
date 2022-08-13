<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getOrder()
    {
        $QUERY = new Order();
        $data = $QUERY->getListOrder();
        return view('adminhtml.order.order_view_index', [
            'title' => 'Manage Order',
            'list_order' => $data
        ]);
    }
}