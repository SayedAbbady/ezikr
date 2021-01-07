<?php

namespace App\Http\Controllers\admin;

use App\Models\aboutUs;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class aboutController extends Controller
{
    use PhotoTrait;

    public function index() 
    {
        $about = aboutUs::get()->first();
        return view('admin.about.index',[
            'about' => $about
        ]);
    }

    public function editAbout(Request $request) 
    {
        
        $request->validate([
            'title'        =>'required', 
            'description'  =>'required'

        ]);
            
        if ($request->has('file')) {
            $file_name = $this->savePhoto($request->file , 'assets/images/about');
        } else {
            $file_name = $request->bg;
        }
        $slider = aboutUs::where('a_id',$request->id)
                ->update([
                        "a_title"            =>$request->title,
                        "a_description"      =>$request->description,
                        "a_email"            =>$request->email,
                        "a_phone"            =>$request->phone,
                        "a_image"            =>$file_name,
                        "a_facebook"         =>$request->facebook,
                        "a_numOfCourses"     =>$request->courses,
                        "a_numOfStudents"    =>$request->students,
                        "a_numOfTeachers"    =>$request->teachers,
                        "a_numOfSessions"    =>$request->sessions
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
}
