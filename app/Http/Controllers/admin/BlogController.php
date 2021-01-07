<?php

namespace App\Http\Controllers\admin;

use App\Models\Blogs;
use App\Traits\PhotoTrait;
use App\Models\blogcomment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BlogController extends Controller
{
    use PhotoTrait;
    
    //show all
    public function index()
    {
        $blogs = Blogs::all();
        return view('admin.blogs.indexblog',[
            'blogs'=>$blogs
        ]);
    }

    // create
    public function create()
    {
        return view('admin.blogs.create');
    }

    // added
    public function store(Request $request)
    {
        $request->validate([
            'title'        =>'required', 
            'description'  =>'required',    
            'file'         =>'required|image'
        ]);
            
        $file_name = $this->savePhoto($request->file , 'assets/images/blogs');
    
        $slider = blogs::create([
            "blogs_tilte"            =>$request->title,
            "blogs_text"      =>$request->description,
            "blogs_image"       =>$file_name,
            "blogs_slug"       =>Str::slug($request->title),
            
        ]);

        if ($slider)
            return response()->json([
                "status"    => '1',
                "msg"       => 'Added successfully'
            ]);
        else
            return response()->json([
                "status"    => '0',
                "msg"       => 'Sorry, please try again'
            ]);
    }

    //show one
    public function show($id)
    {
        $blogs = Blogs::whereId($id)->get();
        $comments = Blogs::find($blogs[0]->id)->comments;
        return view('admin.blogs.show',[
            'blogs'=>$blogs,
            'comments'=>$comments
        ]);
    }

    //edit
    public function edit($id)
    {
        $blogs = Blogs::whereId($id)->get();
        $comments = Blogs::find($blogs[0]->id)->comments;
        return view('admin.blogs.edit',[
            'blogs'=>$blogs,
            'comments'=>$comments
        ]);
    }

    //update
    public function updateBlogs(Request $request)
    {
         $request->validate([
            'title'        =>'required', 
            'description'  =>'required',    
            'bg'           =>'required',
            'id'           =>'required'
        ]);
            
        if ($request->has('file')) {
            $file_name = $this->savePhoto($request->file , 'assets/images/blogs');
        } else {
            $file_name = $request->bg;
        }
        $slider = Blogs::where('id',$request->id)
                ->update([
                        "blogs_tilte"            =>$request->title,
                        "blogs_text"      =>$request->description,
                        "blogs_image"             =>$file_name
                    ]);

        if ($slider)
            return response()->json([
                "status"    => '1',
                "msg"       => 'Edit successfully'
            ]);
        else
            return response()->json([
                "status"    => '0',
                "msg"       => 'Sorry, please try again'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteBlog(Request $request)
    {
        $sliderDelete = blogs::where('id',$request->id)->delete();
        
        if ($sliderDelete)
            return response()->json([
                "status"    => '1',
                "msg"       => 'Deleted successfully'
            ]);
        else
            return response()->json([
                "status"    => '0',
                "msg"       => 'Sorry, please try again'
            ]);
    }

    // delete Comment
    public function deleteComment(Request $request) 
    {
    
        $sliderDelete = blogcomment::where('id',$request->id)->delete();
        
        if ($sliderDelete)
            return response()->json([
                "status"    => '1',
                "msg"       => 'Comment, deleted successfully'
            ]);
        else
            return response()->json([
                "status"    => '0',
                "msg"       => 'Sorry, please try again'
            ]);
            
    }
}
