<?php

namespace App\Http\Controllers\TWT;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function BlogCreate(){
        return view('backend.Blog.BlogCreate');
    }
    public function BlogManage(){
        return view('backend.Blog.BlogManage');
    }
}
