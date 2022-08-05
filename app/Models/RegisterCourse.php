<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RegisterCourse extends Model
{
    protected $table = 'register_courses';

    public function saveReg($params)
    {
        $data = array_merge($params['cols']);
        $res = DB::table('register_courses')->insertGetId($data);
        return $res;
    }
}