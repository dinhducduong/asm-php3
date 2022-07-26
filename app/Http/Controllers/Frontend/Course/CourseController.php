<?php

namespace App\Http\Controllers\Frontend\Course;
use App\Models\Course;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Level;
use App\Models\Order;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $this->data = new Course();
        $data_course = $this->data->getCourse();
        $this->query = new Categories();
        $data = $this->query->getCategory();
        $this->level = new Level();
        $data_level = $this->level->getLevel();
        $this->tea = new Teacher();
        $data_teachers = $this->tea->getTeacher();
        return view('frontend.course.list_course_view',[
            'data'=> $data_course,
            'cate' => $data,
            'level' => $data_level,
            'teacher' => $data_teachers

        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getCourseDetail(Request $request){
        $this->data = new Course();
        $detail_course = $this->data->getCourseDetail($request->id);
        $count_course_teachers = $this->data->getCountCourseTeacher($detail_course[0]->id_teacher);
        $this->od = new Order();
        $data_order = $this->od->getCountOrderCourse($request->id);
        return view('frontend.course.list_course_detail',[
            'detail_course'=> $detail_course,
            'count_course_teachers' => $count_course_teachers,
            'count_order' => count($data_order)
        ]);
    }

}
