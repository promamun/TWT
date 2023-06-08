<?php

namespace App\Http\Controllers\TWT;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function PrivacyPolicyCreate(){
        return view('backend.PrivacyPolicy.PrivacyPolicyCreate');
    }
    public function PrivacyPolicyManage(){
        return view('backend.PrivacyPolicy.PrivacyPolicyManage');
    }
}
