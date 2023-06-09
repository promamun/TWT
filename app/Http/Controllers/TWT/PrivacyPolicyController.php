<?php

namespace App\Http\Controllers\TWT;

use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function PrivacyPolicyCreate(){
        return view('backend.PrivacyPolicy.PrivacyPolicyCreate');
    }
    public function PrivacyPolicyEdit($id){
        $policyData = PrivacyPolicy::find($id);
        return view('backend.PrivacyPolicy.PrivacyPolicyEdit',compact('policyData'));
    }
    public function PrivacyPolicyManage(){
        $policyData = PrivacyPolicy::all();
        $policyCount = $policyData->count();
        return view('backend.PrivacyPolicy.PrivacyPolicyManage',compact('policyData','policyCount'));
    }
    public function PrivacyPolicyStore(Request $request){
        try {
            $this->validate($request,[
                'privacy' => 'required',
            ]);
            $policyStore = new PrivacyPolicy ();
            $policyStore->privacy = $request->privacy;
            $policyStore->save();
            return redirect('/twt/privacy/policy/manage')->with('message','Policy Create Success');
        }catch (\Exception $exception){
            return redirect()->back()->with('error',$exception->getMessage());
        }
    }
    public function PrivacyPolicyUpdate(Request $request,$id){
        try {
            $this->validate($request,[
                'privacy' => 'required',
            ]);
            $policyStore = PrivacyPolicy::find($id);
            $policyStore->privacy = $request->privacy;
            $policyStore->save();
            return redirect('/twt/privacy/policy/manage')->with('message','Policy Update Success');
        }catch (\Exception $exception){
            return redirect()->back()->with('error',$exception->getMessage());
        }
    }
    public function PrivacyPolicyDestroy($id){
        $policyDestroy = PrivacyPolicy::find($id);
        $policyDestroy->delete();
        return redirect()->back()->with('message','Policy Destroy Success');
    }
}
