<?php

namespace App\Http\Controllers\admin;

use App\Models\homepage;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SeoController extends Controller
{
    use PhotoTrait;

    public function index()
    {
        $count = homepage::count();
        $skip = 1;
        $limit = $count - $skip;
        $homepage = homepage::skip($skip)->take($limit)->get();
        return view('admin.homepage.index',[
            'homepage' => $homepage
        ]);
    }
    public function create()
    {   
        $homepage = homepage::get()->first();
        return view('admin.homepage.create',[
            'homepage' => $homepage
        ]);
    }

    public function edit($id) 
    {
        $homepage = homepage::where('h_id',$id)->get();
        
        return view('admin.homepage.edit',[
            'homepage' => $homepage
        ]);
    }

    public function sliderEdit(Request $request)
    {
        
        $request->validate([
            'title'        =>'required', 
            'description'  =>'required'
        ]);
            
        if ($request->has('file')) {
            $file_name = $this->savePhoto($request->file , 'assets/images/slider');
        } else {
            $file_name = $request->bg;
        }
    
        $slider = homepage::where('h_id',$request->id)
                ->update([
                        "h_title"            =>$request->title,
                        "h_description"      =>$request->description,
                        "h_background"       =>$file_name,
                        
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

    public function storeSlider(Request $request) 
    {

        
        $request->validate([
            'title'        =>'required', 
            'description'  =>'required',    
            'file'         =>'required'
        ]);
            
        $file_name = $this->savePhoto($request->file , 'assets/images/slider');
    
        $slider = homepage::create([
            "h_title"            =>$request->title,
            "h_description"      =>$request->description,
            "h_background"       =>$file_name,
            
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

    public function updateSeo(Request $request, homepage $homepage)
    {  
        $homepage = homepage::get()->first();
        if ($request->has('fileicon')) {
            $file_nameIcon = $this->savePhoto($request->fileicon , 'assets/images/seo');
        } else {
            $file_nameIcon = $homepage->h_icon;
        }
        if ($request->has('filelogo')) {
            $file_nameLogo = $this->savePhoto($request->filelogo , 'assets/images/seo');
        } else {
            $file_nameLogo = $homepage->h_logo;
        }
        


        $seo = homepage::where('h_id', 1)
                    ->update([
                        "h_icon" => $file_nameIcon,
                        "h_seoKeywords" => $request->keywords,
                        "h_logo" => $file_nameLogo,
                        "h_seoDescription" => $request->webdescription
                    ]);

        if ($seo)
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

    public function deleteSeo(Request $request,homepage $homepage)
    {   
        $sliderDelete = homepage::where('h_id',$request->id)->delete();
        
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
