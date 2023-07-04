<?php

namespace App\Http\Controllers\TWT;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoursesController extends Controller
{
    public function CourseCreate(){
        return view('backend.Courses.CourseCreate');
    }
    public function CourseEdit($id){
        $course = Course::find($id);
        return view('backend.Courses.CourseEdit',compact('course'));
    }
    public function CourseManage(){
        $publish = Course::where('status','Publish')->orderBY('id','desc')->get();
        $pending = Course::where('status','Pending')->orderBY('id','desc')->get();
        $draft = Course::where('status','Draft')->orderBY('id','desc')->get();
        return view('backend.Courses.CourseManage',compact('publish','pending','draft'));
    }
    public function CourseStore(Request $request){
        try {
            $validatedData = $request->validate([
                'title' => 'required|string',
                'description' => 'required|string',
                'learn' => 'required|string',
                'status' => 'required|string',
                'price' => 'required|numeric',
                'image' => 'required',
            ]);
//            dd($validatedData);
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move('course/', $imageName);

            $courseStore = Course::create([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'learn' => $validatedData['learn'],
                'status' => $validatedData['status'],
                'price' => $validatedData['price'],
                'image' => $imageName,
            ]);
            return redirect('/twt/course/manage')->with('message','Course Create Success');
        }catch (\Exception $exception){
            return redirect()->back()->with('error',$exception->getMessage());
        }
    }
    public function CourseUpdate(Request $request,$id){
        try {
            $validatedData = $request->validate([
                'title' => 'required|string',
                'description' => 'required|string',
                'learn' => 'required|string',
                'status' => 'required|string',
                'price' => 'required|numeric',
            ]);
//            dd($validatedData);
            $courseUpdate = Course::find($id);
            if ($request->hasFile('image')) {
                if ($courseUpdate->image && file_exists('course/'. $courseUpdate->image)) {
                    unlink('course/'. $courseUpdate->image);
                }

                $imageName = time() . '.' . $request->file('image')->extension();
                $request->file('image')->move('course/', $imageName);
                $courseUpdate->image = $imageName;
            }
            $courseUpdate->update($validatedData);
            return redirect('/twt/course/manage')->with('message','Course Update Success');
        }catch (\Exception $exception){
            return redirect()->back()->with('error',$exception->getMessage());
        }
    }
    public function CourseDelete($id){
        $courseDestroy = Course::findOrFail($id);

        if ($courseDestroy->image && file_exists('course/'. $courseDestroy->image)) {
            unlink('course/'. $courseDestroy->image);
        }
        $courseDestroy->delete();
        return redirect()->back()->with('message','Course Destroy Success');
    }
}
