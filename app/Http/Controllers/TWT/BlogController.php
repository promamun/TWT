<?php

namespace App\Http\Controllers\TWT;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogTag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function BlogCreate(){
        $blogTags = BlogTag::all();
        return view('backend.Blog.BlogCreate',compact('blogTags'));
    }
    public function BlogEdit($id){
        $blogTags = BlogTag::all();
        $blogs = Blog::find($id);
        $tag_id = $blogs->tags()->pluck('blog_tags.id')->toArray();
        return view('backend.Blog.BlogEdit',compact('blogTags','blogs','tag_id'));
    }
    public function BlogManage(){
        $blogs = Blog::select('blogs.id', 'blogs.title', 'blogs.created_at', 'blogs.image')
            ->get();
        return view('backend.Blog.BlogManage',compact('blogs'));
    }
    public function BlogStore(Request $request){
        try {

            $validatedData = $request->validate([
                'title' => 'required|string',
                'description' => 'required|string',
                'image' => 'required',
                'tags' => 'required|array',
                'tags.*' => 'numeric',
            ]);
//            dd($request->all());
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move('blog/', $imageName);

            $blogStore = Blog::create([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'image' => $imageName,
            ]);

            $blogStore->tags()->attach($validatedData['tags']);

            return redirect('/twt/blog/manage')->with('message','Blog Create Success');
        }catch (\Exception $exception){
            return redirect()->back()->with('error',$exception->getMessage());
        }
    }
    public function BlogUpdate(Request $request,$id){
        try {

            $validatedData = $request->validate([
                'title' => 'required|string',
                'description' => 'required|string',
                'tags' => 'required|array',
                'tags.*' => 'numeric',
            ]);
//            dd($request->all());
            $blogUpdate = Blog::findOrFail($id);
            if ($request->hasFile('image')) {
                if ($blogUpdate->image && file_exists('blog/'. $blogUpdate->image)) {
                    unlink('blog/'. $blogUpdate->image);
                }

                $imageName = time() . '.' . $request->file('image')->extension();
                $request->file('image')->move('blog/', $imageName);
                $blogUpdate->image = $imageName;
            }

            $blogUpdate->title = $validatedData['title'];
            $blogUpdate->description = $validatedData['description'];
            $blogUpdate->save();

            $blogUpdate->tags()->detach();

            $blogUpdate->tags()->sync($validatedData['tags']);

            return redirect('/twt/blog/manage')->with('message','Blog Update Success');
        }catch (\Exception $exception){
            return redirect()->back()->with('error',$exception->getMessage());
        }
    }
}
