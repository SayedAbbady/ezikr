<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\inquer;
use App\Models\visitor;

class DashController extends Controller
{
    public function index()
    {
        $visitors = visitor::count();
        $inquer = inquer::count();

        $inqueryUnSeen  = inquer::whereSeen('0')->count();
        $inquerySeen  = inquer::whereSeen('1')->count();
        return view('admin.index',[
            'visitors' => $visitors,
            'inquer'    =>$inquer,
            'inqueryUnSeen'=>$inqueryUnSeen,
            'inquerySeen'=>$inquerySeen

        ]);
    }
}
