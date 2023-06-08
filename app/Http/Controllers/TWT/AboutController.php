<?php

namespace App\Http\Controllers\TWT;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutCreate(){
        return view('backend.about.aboutCreate');
    }
    public function aboutManage(){
        return view('backend.about.aboutManage');
    }
}
