<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
    public function getCountOrderCourse($id){
        $data = DB::table('orders')->where('course_id', $id)->get();
        return $data;
    }
}
