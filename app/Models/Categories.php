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

    /**
     * @return mixed
     */
    public function getCategory()
    {
        $data = Categories::orderBy('id', 'desc')->paginate(10);
        return $data;
    }

    public function saveCategoryAdd($params)
    {
        $data = array_merge($params['cols']);
        $res = DB::table('categories')->insertGetId($data);
        return $res;
    }

    public function saveCategoryEdit($params)
    {
        $dataUpdate = [];
        foreach ($params['cols'] as $colName => $value) {
            if ($colName == 'id') continue;
            if (in_array($colName, $this->fillable)) {
                $dataUpdate[$colName] = (strlen($value) == 0 ? null : $value);
            }
        }
        $res = DB::table($this->table)
            ->where('id', '=', $params['cols']['id'])
            ->update($dataUpdate);

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