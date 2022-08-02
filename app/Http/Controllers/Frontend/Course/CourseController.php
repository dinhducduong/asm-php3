<?php

namespace App\Http\Controllers\Frontend\Course;

use App\Models\Course;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Level;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\User;

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
        $this->user = new User();
        $data_user = $this->user->getUser();
        return view('frontend.course.list_course_view', [
            'data' => $data_course,
            'cate' => $data,
            'level' => $data_level,
            'user' => $data_user,

        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getCourseDetail(Request $request)
    {
        $this->data = new Course();
        $detail_course = $this->data->getCourseDetail($request->id);
        // dd($detail_course[0]->users_id);
        $data_count_course_user = $this->data->getCountCourseUser($detail_course[0]->users_id);
        // dd($data_count_course_user);
        $this->od = new Order();
        $data_order = $this->od->getCountOrderCourse($request->id);
        return view('frontend.course.list_course_detail', [
            'detail_course' => $detail_course,
            'count_order' => count($data_order),
            'data_count_course_user' => $data_count_course_user
        ]);
    }
}