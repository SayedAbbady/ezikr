<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\plans;

class PlanController extends Controller
{

    public function index() 
    {
        $plans = plans::all();
        return view('admin.plans.indexplan',[
            'plans'=>$plans
        ]);
    }

    public function add() 
    {
        return view('admin.plans.create');
    }

    public function store(Request $request) 
    {

        
        $request->validate([
            'title'         =>'required', 
            'price'         =>'required',    
            'planfeature'   =>'required'
        ]);
            
    
        $slider = plans::create([
            "pl_title"              =>$request->title,
            "pl_money"              =>$request->price,
            "pl_features"           =>$request->planfeature,
            
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
        $plans = plans::where('pl_id',$id)->get();
        return view('admin.plans.edit',[
            'plans' => $plans
        ]);
    }

    public function planUpdata(Request $request)
    {
        $request->validate([
            'title'         =>'required', 
            'price'         =>'required',
            'planfeature'   =>'required'
        ]);
            
        $slider = plans::where('pl_id',$request->id)
                ->update([
                        "pl_title"      =>$request->title,
                        "pl_money"      =>$request->price,
                        "pl_features"   =>$request->planfeature
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

    public function deleteplan(Request $request)
    {
         $sliderDelete = plans::where('pl_id',$request->id)->delete();
        
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
