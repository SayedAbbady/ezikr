<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\inquer;

class inquersController extends Controller
{
    public function index() 
    {
        $inquer = inquer::all();
        return view('admin.inquers.index',[
            'inquers' => $inquer
        ]);
    }
    
    public function show($id) 
    {

        inquer::where('i_id',$id)->update([
            "seen" => '1'
        ]);

        $inquer = inquer::where('i_id',$id)->get();
        return view('admin.inquers.show',[
            'inquer'=>$inquer,
        ]);
    }
}
