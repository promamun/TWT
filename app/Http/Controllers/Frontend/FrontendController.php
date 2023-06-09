<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;
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
        $policyData = PrivacyPolicy::all();
        return view('frontend.home.privacyPolicy',compact('policyData'));
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
    public function userProfile(){
        return view('frontend.user.profile');
    }
    public function userDashboard(){
        return view('frontend.user.userDashboard');
    }
    public function enrolledCourses(){
        return view('frontend.user.enrolledCourses');
    }
    public function wishlist(){
        return view('frontend.user.Wishlist');
    }
    public function reviews(){
        return view('frontend.user.Reviews');
    }
    public function orderHistory(){
        return view('frontend.user.Order-History');
    }
    public function settings(){
        return view('frontend.user.Settings');
    }

}
