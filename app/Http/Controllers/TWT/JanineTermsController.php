<?php

namespace App\Http\Controllers\TWT;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JanineTermsController extends Controller
{
    public function termsCreate(){
        return view('backend.Terms.termsCreate');
    }
    public function termsManage(){
        return view('backend.Terms.termsManage');
    }
}
