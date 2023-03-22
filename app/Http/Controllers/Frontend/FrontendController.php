<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function aboutJanine(){
        return view('frontend.aboutus.index');
    }
    public function blog(){
        return view('frontend.blog.index');
    }public function blogDetails(){
        return view('frontend.blog.blogDetails');
    }
    public function memberships(){
        return view('frontend.membership.index');
    }
    public function privacyPolicy(){
        return view('frontend.home.privacyPolicy');
    }
    public function termsOfCondition(){
        return view('frontend.home.termsOfCondition');
    }
    public function allCourses(){
        return view('frontend.course.allCourses');
    }
    public function courseDetails(){
        return view('frontend.course.courseDetails');
    }
}
