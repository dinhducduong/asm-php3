<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'orders';

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'user_id',
        'course_id',
        'status'
    ];

    /**
     * @param $id
     * @return \Illuminate\Support\Collection
     */
    public function getCountOrderCourse($id)
    {
        $data = DB::table('orders')->where('course_id', $id)->get();
        return $data;
    }

    public function saveOrder($params)
    {
        $data = array_merge($params['cols']);
        $res = DB::table('orders')->insertGetId($data);
        return $res;
    }

    public function saveRegisterCourse($params)
    {
        $data = array_merge($params['cols']);
        $res = DB::table('register_courses')->insertGetId($data);
        return $res;
    }

    public function getOrder()
    {
        $user_id = Auth::user();
        $data = DB::table('orders')
            ->select('orders.*', 'register_courses.*', 'courses.title as title_course')
            ->join('register_courses', 'register_courses.order_id', '=', 'orders.id')
            ->join('courses', 'courses.id', '=', 'orders.course_id')
            ->where('orders.user_id', '=', $user_id->id)
            ->orderBy('orders.created_at', 'desc')
            ->paginate(24);
        return $data;
    }

    public function getListOrder()
    {
        $data = DB::table('orders')
            ->select('orders.*', 'register_courses.*', 'courses.title as title_course')
            ->join('register_courses', 'register_courses.order_id', '=', 'orders.id')
            ->join('courses', 'courses.id', '=', 'orders.course_id')
            ->orderBy('orders.created_at', 'desc')
            ->paginate(24);

        return $data;
    }
}