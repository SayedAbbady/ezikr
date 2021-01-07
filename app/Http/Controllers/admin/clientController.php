<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients;
use App\Traits\PhotoTrait;

class clientController extends Controller
{
    use PhotoTrait;
    
    public function index() 
    {
        $clients = clients::all();
        return view('admin.clients.indexclients',[
            'clients' => $clients
        ]);
    }

    public function add() 
    {
        return view('admin.clients.create');
    }

    public function store(Request $request) 
    {
        
        $request->validate([
            'name'        =>'required', 
            'message'  =>'required',    
            'newFile'         =>'required|image'
        ]);
            
        $file_name = $this->savePhoto($request->newFile , 'assets/images/clients');
    
        $slider = clients::create([
            "cl_image"       =>$file_name,
            "cl_name"            =>$request->name,
            "cl_message"        =>$request->message,
            
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
        $clients = clients::where('cl_id',$id)->get();
        
        return view('admin.clients.edit',[
            'clients' => $clients
        ]);
    }

    public function clientUpdata(Request $request)
    {
        $request->validate([
            'name'        =>'required', 
            'message'  =>'required'
        ]);
            
        if ($request->has('newFile')) {
            $file_name = $this->savePhoto($request->newFile , 'assets/images/clients');
            
        } else {
            $file_name = $request->bg;
        }
        $slider = clients::where('cl_id',$request->id)
                ->update([
                        "cl_image"       =>$file_name,
                        "cl_name"            =>$request->name,
                        "cl_message"        =>$request->message,
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

    public function clientUpdatabg(Request $request)
    {
        $request->validate([
            'newFile' => "required|image"
        ]);
        $file_name = $this->savePhoto($request->newFile , 'assets/images/clients');
        $image = clients::where('cl_id', 1)
                    ->update([
                        'cl_background' => $file_name
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

    public function clientDelete(Request $request)
    {
         $sliderDelete = clients::where('cl_id',$request->id)->delete();
        
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
