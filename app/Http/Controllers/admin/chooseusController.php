<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\chooseus;
use App\Traits\PhotoTrait;

class chooseusController extends Controller
{
    use PhotoTrait;
    
    public function index() 
    {
        $count = chooseus::count();
        $skip = 1;
        $limit = $count - $skip;
        $chooseus = chooseus::skip($skip)->take($limit)->get();
        $chooseFirst = chooseus::get()->first();
        return view('admin.chooseus.indexchooseus',[
            'chooseus'      => $chooseus,
            'chooseFirst'   => $chooseFirst
        ]);
        
    }

    public function add() 
    {
        return view('admin.chooseus.createchooseus');
    }

    public function store(Request $request) 
    {
        
        $request->validate([
            'icon'        =>'required', 
            'title'  =>'required',    
            'description'         =>'required'
        ]);
            
    
        $slider = chooseus::create([
            "w_icon"       =>$request->icon,
            "w_title"            =>$request->title,
            "w_description"        =>$request->description,
            
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
        $chooseus = chooseus::where('w_id',$id)->get();
        
        return view('admin.chooseus.editchooseus',[
            'chooseus' => $chooseus
        ]);
    }

    public function chooseusUpdata(Request $request)
    {
        $request->validate([
            'title'        =>'required', 
            'description'  =>'required',
            'icon'  =>'required'
        ]);
            
        
        $slider = chooseus::where('w_id',$request->id)
                ->update([
                        "w_icon"       =>$request->icon,
                        "w_description"            =>$request->description,
                        "w_title"        =>$request->title,
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

    public function chooseusUpdatabg(Request $request)
    {
        $request->validate([
            'newFile' => "required|image"
        ]);
        $file_name = $this->savePhoto($request->newFile , 'assets/images/chooseus');
        $image = chooseus::where('w_id', 1)
                    ->update([
                        'w_image' => $file_name
                    ]);

        if ($image)
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

    public function chooseusDelete(Request $request)
    {
         $sliderDelete = chooseus::where('w_id',$request->id)->delete();
        
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
