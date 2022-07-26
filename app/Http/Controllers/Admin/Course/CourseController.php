<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
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
            'courses' => $data
        ]);
    }

    public function addCourse(){
        return view('adminhtml.course.course_view_add');
    }
}
