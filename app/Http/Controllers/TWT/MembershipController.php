<?php

namespace App\Http\Controllers\TWT;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function MembershipCreate(){
        return view('backend.Membership.MembershipCreate');
    }
    public function MembershipManage(){
        return view('backend.Membership.MembershipManage');
    }
}
