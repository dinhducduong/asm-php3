<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestCourse;
use App\Models\Categories;
use App\Models\Course;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CourseController extends Controller
{

    public function getCourse()
    {
        $this->QUERY = new Course();
        $data = $this->QUERY->getCourse();
        // $data = Course::paginate(10);
        return view('adminhtml.course.course_view_index', [
            'courses' => $data,
            'title' => "Manage Courses"
        ]);
    }

    public function uploadFile($file)
    {
        $fileName = time() . '-' . $file->getClientOriginalName();
        return $file->storeAs('images', $fileName, 'public');
    }

    public function addCourse(RequestCourse $request)
    {
        $users_id = Auth::user();
        $QUERY_CATE = new Categories();
        $cate = $QUERY_CATE->getCategory();
        $QUERY_LEVEL = new Level();
        $levels = $QUERY_LEVEL->getLevel();
        if ($request->isMethod('post')) {
            $params = [];
            $params['cols'] = [
                'categories_id' => $request->categories_id,
                'users_id' => $users_id->id,
                'levels_id' => $request->levels_id,
                'title' => $request->title,
                'price' => $request->price,
                'key_activated' => rand(),
                'description_short' => $request->description_short,
                'description_long' => $request->description_long,
            ];
            unset($params['cols']['_token']);
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $params['cols']['image'] = $this->uploadFile($request->file('image'));
            }
            $modelCourse = new Course();
            $modelCourse->saveCourseAdd($params);
            Session::flash('success', 'Thêm thành công');
            return redirect()->route('list_course');
        }
        return view('adminhtml.course.course_view_add', [
            'title' => "Add Courses",
            'cate' => $cate,
            'levels' => $levels,
        ]);
    }


    public function deleteCourse(Request $request)
    {
        DB::table('courses')->delete($request->id);
        Session::flash('success', 'Xóa thành công');
        return redirect()->route('list_course');
    }

    public function editCourse(RequestCourse $request)
    {
        $QUERY_FIND = new Course();
        $QUERY_CATE = new Categories();
        $cate = $QUERY_CATE->getCategory();
        $QUERY_LEVEL = new Level();
        $levels = $QUERY_LEVEL->getLevel();
        $data = $QUERY_FIND->EditCourse($request->id);
        if ($request->isMethod('post')) {
            $params = [];
            $params['cols'] = [
                'id' => $request->id,
                'categories_id' => $request->categories_id,
                'levels_id' => $request->levels_id,
                'title' => $request->title,
                'image' => $data->image,
                'price' => $request->price,
                'key_activated' => rand(),
                'description_short' => $request->description_short,
                'description_long' => $request->description_long,
            ];
            unset($params['cols']['_token']);
            $modelCourse = new Course();
            $modelCourse->saveCourseEdit($params);
            Session::flash('success', 'Cập nhật thành công');
            return redirect()->route('list_course');
        }
        return view('adminhtml.course.course_view_edit', [
            'title' => "Edit Courses",
            'course_find' => $data,
            'cate' => $cate,
            'levels' => $levels,
        ]);
    }
}