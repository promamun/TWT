<?php

namespace App\Http\Controllers\TWT;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function CoursesCreate(){
        return view('backend.Courses.CoursesCreate');
    }
    public function CoursesManage(){
        return view('backend.Courses.CoursesManage');
    }
}
