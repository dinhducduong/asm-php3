<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Level extends Model
{
    use HasFactory;
    protected $table = 'levels';
    protected $fillable = ['id','title'];

    public function getLevel(){
        $data = DB::table('levels')->get();
        return $data;
    }
}