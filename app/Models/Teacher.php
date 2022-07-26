<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Teacher extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'teachers';

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'address',
        'surplus',
        'education',
        'description_short',
        'introduce',
        'status'
    ];

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getTeacher(){
        $data = DB::table('teachers')->get();
        return $data;
    }
}
