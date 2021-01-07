<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\teachers;
use App\Traits\PhotoTrait;

class teacherController extends Controller
{
    use PhotoTrait;
    
    public function index() 
    {
        $teachers = teachers::all();
        return view('admin.teachers.indexteacher',[
            'teacher' => $teachers
        ]);
    }

    public function add() 
    {
        return view('admin.teachers.create');
    }

    public function store(Request $request) 
    {   
        $request->validate([
            'name'        =>'required', 
            'jobTitle'  =>'required',    
            'file'         =>'required|image'
        ]);
            
        $file_name = $this->savePhoto($request->file , 'assets/images/teachers');
    
        $slider = teachers::create([
            "t_name"            =>$request->name,
            "t_jobTitle"      =>$request->jobTitle,
            "t_image"       =>$file_name,
            
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

    public function edit($id) 
    {
        $teachers = teachers::where('t_id',$id)->get();
        
        return view('admin.teachers.edit',[
            'teachers' => $teachers
        ]);
    }

    public function teacherUpdata(Request $request)
    {
        $request->validate([
            'name'        =>'required', 
            'jobTitle'  =>'required'
        ]);
            
        if ($request->has('file')) {
            $file_name = $this->savePhoto($request->file , 'assets/images/teachers');
        } else {
            $file_name = $request->bg;
        }
        $slider = teachers::where('t_id',$request->id)
                ->update([
                        "t_name"            =>$request->name,
                        "t_jobTitle"      =>$request->jobTitle,
                        "t_image"             =>$file_name
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

    public function teacherDelete(Request $request)
    {
         $sliderDelete = teachers::where('t_id',$request->id)->delete();
        
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
}
