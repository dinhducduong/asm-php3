<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Course;
use App\Models\Level;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getCourse(){
        $this->QUERY = new Course();
        $data = $this->QUERY->getCourse();
        return view('adminhtml.course.course_view_index',[
            'courses' => $data,
            'title' => "Manage Courses"
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addCourse(Request $request){
        $QUERY_CATE = new Categories();
        $cate = $QUERY_CATE->getCategory();
        $QUERY_LEVEL = new Level();
        $levels = $QUERY_LEVEL->getLevel();
        $QUERY_TEACHER = new Teacher();
        $teachers = $QUERY_TEACHER->getTeacher();
        if($request->isMethod('post')){
            $params = [];
            $params['cols'] = [
                'categories_id' => $request->categories_id,
                'teachers_id' => 1,
                'levels_id' => $request->levels_id,
                'title' => $request->title,
                'image' => $request->image,
                'price' => $request->price,
                'key_activated' => rand(),
                'description_short' => $request->description_short,
                'description_long' => $request->description_long,
            ];
            unset($params['cols']['_token']);
            $modelCourse = new Course();
            $modelCourse->saveCourse($params);
        }
        return view('adminhtml.course.course_view_add',[
            'title' => "Add Courses",
            'cate' => $cate,
            'levels' => $levels,
            'teachers' => $teachers
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function editCourse(){
        return view('adminhtml.course.course_view_edit',[
            'title' => "Edit Courses"
        ]);
    }
}
