<?php

namespace App\Http\Controllers\TWT;

use App\Http\Controllers\Controller;
use App\Models\JanineTerm;
use Illuminate\Http\Request;

class JanineTermsController extends Controller
{
    public function termsCreate(){
        return view('backend.Terms.termsCreate');
    }
    public function termsEdit($id){
        $termsData = JanineTerm::find($id);
        return view('backend.Terms.termsEdit',compact('termsData'));
    }
    public function termsManage(){
        $termsData = JanineTerm::all();
        $termsCount = $termsData->count();
        return view('backend.Terms.termsManage',compact('termsData','termsCount'));
    }
    public function termsStore(Request $request){
        try {
            $this->validate($request,[
                'terms' => 'required',
            ]);
            $termsStore = new JanineTerm ();
            $termsStore->terms = $request->terms;
            $termsStore->save();
            return redirect('/twt/terms/of/use/manage')->with('message','Terms Create Success');
        }catch (\Exception $exception){
            return redirect()->back()->with('error',$exception->getMessage());
        }
    }
    public function termsUpdate(Request $request,$id){
        try {
            $this->validate($request,[
                'terms' => 'required',
            ]);
            $termsStore = JanineTerm::find($id);
            $termsStore->terms = $request->terms;
            $termsStore->save();
            return redirect('/twt/terms/of/use/manage')->with('message','Terms Update Success');
        }catch (\Exception $exception){
            return redirect()->back()->with('error',$exception->getMessage());
        }
    }
    public function termsDestroy($id){
        $termsDestroy = JanineTerm::find($id);
        $termsDestroy->delete();
        return redirect()->back()->with('message','Terms Destroy Success');
    }
}
