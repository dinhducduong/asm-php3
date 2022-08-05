<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Course extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'courses';

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'categories_id',
        'teachers_id',
        'title',
        'image',
        'price',
        'key_activated',
        'description_short',
        'description_long',
    ];

    private static function where(string $string, $id)
    {
    }

    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getCourseFeature()
    {
        $data = DB::table('courses')->leftJoin('orders', 'courses.id', '=', 'orders.course_id')
            ->selectRaw('courses.*,COALESCE(count(orders.course_id),0) total')
            ->groupBy('courses.id')
            ->orderBy('total', 'desc')
            ->take(12)
            ->get();
        return $data;
    }

    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getCourse()
    {
        $data = DB::table('courses')
            ->select('courses.*', 'categories.title as title_cate', 'levels.title as title_levels')
            ->join('categories', 'categories.id', '=', 'courses.categories_id')
            ->join('levels', 'levels.id', '=', 'courses.levels_id')
            ->paginate(24);
        return $data;
    }

    /**
     * @param $id
     * @return \Illuminate\Support\Collection
     */
    public function getCourseDetail($id)
    {
        $data = DB::table('courses')
            ->join('categories', 'categories.id', '=', 'courses.categories_id')
            ->join('users', 'users.id', '=', 'courses.users_id')
            ->join('levels', 'levels.id', '=', 'courses.levels_id')
            ->where('courses.id', $id)
            ->select('courses.*', 'categories.title as title_cate', 'users.*', 'users.id as id_user', 'levels.title as title_levels')
            ->get();
        return $data;
    }

    /**
     * @param $id
     * @return int
     */
    public function getCountCourseUser($id)
    {
        $data = DB::table('courses')->where('users_id', $id)->count();
        return $data;
    }

    public function saveCourseAdd($params)
    {
        $data = array_merge($params['cols']);
        $res = DB::table('courses')->insertGetId($data);
        return $res;
    }

    public function saveCourseEdit($params)
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
    public function EditCourse($id)
    {
        $data = DB::table('courses')->find($id);
        return $data;
    }

    public function deleteCourse($param)
    {
        $data = DB::table('courses')->findOrFail($param);
        $data->delete();
    }
}