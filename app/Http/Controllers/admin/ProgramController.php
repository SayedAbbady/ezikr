<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\programs;
use App\Traits\PhotoTrait;

class ProgramController extends Controller
{
    use PhotoTrait;

    public function index() 
    {
        $programs = programs::all();
        return view('admin.programs.indexprogram',[
            'programs'=>$programs
        ]);
    }

    public function add() 
    {
        return view('admin.programs.create');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'title'        =>'required', 
            'description'  =>'required',    
            'file'         =>'required|image'
        ]);
            
        $file_name = $this->savePhoto($request->file , 'assets/images/programs');
    
        $slider = programs::create([
            "p_title"            =>$request->title,
            "p_description"      =>$request->description,
            "p_icon"       =>$file_name,
            
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
        $programs = programs::where('p_id',$id)->get();
        // return $programs;
        return view('admin.programs.edit',[
            'programs' => $programs
        ]);
    }

    public function programUpdata(Request $request)
    {
        $request->validate([
            'title'        =>'required', 
            'description'  =>'required'
        ]);
            
        if ($request->has('file')) {
            $file_name = $this->savePhoto($request->file , 'assets/images/programs');
        } else {
            $file_name = $request->bg;
        }
        $slider = programs::where('p_id',$request->id)
                ->update([
                        "p_title"            =>$request->title,
                        "p_description"      =>$request->description,
                        "p_icon"             =>$file_name
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

    public function deleteprogram(Request $request)
    {
         $sliderDelete = programs::where('p_id',$request->id)->delete();
        
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
