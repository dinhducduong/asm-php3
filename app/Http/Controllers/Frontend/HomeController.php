<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $this->data = new Course();
        $data_cource = $this->data->getCourseFeature();
        return view('frontend.main', [
            'data_cource' => $data_cource
        ]);
    }
}