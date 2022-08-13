<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['title', 'image', 'status'];

    public function getCategory()
    {
        $data = Categories::orderBy('id', 'desc')->paginate(10);
        return $data;
    }

    public function saveCategoryAdd($params)
    {
        $res = DB::table('categories')->insertGetId($params['cols']);
        return $res;
    }

    public function saveCategoryEdit($params)
    {
        $res = DB::table($this->table)
            ->where('id', '=', $params['cols']['id'])
            ->update($params['cols']);

        return $res;
    }
    public function deleteCategory($param)
    {
        $data = DB::table('categories')->findOrFail($param);
        $data->delete();
    }

    public function editCategory($param)
    {
        $data = DB::table('categories')->find($param);
        return $data;
    }
}