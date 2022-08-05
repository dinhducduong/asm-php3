<?php

namespace App\Http\Controllers\Frontend\Course;

use App\Models\Course;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Level;
use App\Models\Order;
use App\Models\RegisterCourse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

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
        $data_count_course_user = $this->data->getCountCourseUser($detail_course[0]->users_id);
        $this->od = new Order();
        $data_order = $this->od->getCountOrderCourse($request->id);
        $users = Auth::user();
        if ($request->isMethod('post')) {
            if (Auth::user()) {
                $params = [];
                $params['cols'] = [
                    'user_id' => $users->id,
                    'course_id' => $request->id,
                ];
                $modelOrder = new Order();
                $res = $modelOrder->saveOrder($params);
                $params['cols'] = [
                    'order_id' => $res,
                    'name' => $users->name,
                    'email' => $users->email,
                ];
                $modeReg = new RegisterCourse();
                $modeReg->saveReg($params);
            } else {
            }
        }
        return view('frontend.course.list_course_detail', [
            'detail_course' => $detail_course,
            'count_order' => count($data_order),
            'data_count_course_user' => $data_count_course_user
        ]);
    }
}