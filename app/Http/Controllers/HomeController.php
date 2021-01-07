<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Blogs;
use App\Models\plans;
use App\Models\inquer;
use App\Models\aboutUs;
use App\Models\clients;
use App\Models\visitor;
use App\Models\chooseUs;
use App\Models\homepage;
use App\Models\programs;
use App\Models\teachers;
use App\Models\countries;
use App\Models\blogcomment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(Request $request)
    {

        $date = Carbon::parse(now());

        visitor::create([
            'ipaddress'=>$request->ip(),
            'month'=>$date->month,
            'day'=>$date->day,
            'year'=>$date->year
        ]);
        
    }



    
    public function index(Request $request)
    {
        
        $countries = countries::all();
        $about      = aboutUs::get()->first();
      
        $client     = clients::all();
        $plan       = plans::all();
        $program    = programs::all();
        $teacher    = teachers::all();

        $blogs = Blogs::inRandomOrder()->limit(3)->get();
        // $blogs = Blogs::find(1)->comments;


        $count = homepage::count();
        $skip = 1;
        $limit = $count - $skip;
        $homepage = homepage::skip($skip)->take($limit)->get();


        $countchooseus = chooseus::count();
        $limitchooseus = $countchooseus - $skip;
        $chooseus = chooseUs::skip($skip)->take($limitchooseus)->get();

        $seotags = homepage::get()->first();
        $chooseusFirst = chooseUs::get()->first();
        

        return view('user.index',[
            "about"             =>$about,
            "chooseus"          =>$chooseus,
            "client"            =>$client,
            "homepage"          =>$homepage,
            "plan"              =>$plan,
            "program"           =>$program,
            "teacher"           =>$teacher,
            "silderCount"       =>$limit,
            "seotags"           =>$seotags,
            'chooseusFirst'     =>$chooseusFirst,
            'countries'         =>$countries,
            'blogs'             =>$blogs
        ]);
        
    }

    public function blog ($id) 
    {   
        
        $seotags = homepage::get()->first();

        $blogs = Blogs::where('blogs_slug',$id)->get();
        $allBlogs = Blogs::select('blogs_slug','blogs_tilte')->where('blogs_slug','!=',$id)->get();

        $comments = Blogs::find($blogs[0]->id)->comments;


        

        return view('user.blogs.singleblog',[
            'blogs' =>$blogs,
            'allBlogs'=>$allBlogs,
            'comments' =>$comments,
            "seotags"           =>$seotags,
        ]); 
    }

    public function saveForm(Request $request) 
    {
        
        $request->validate([

            "username"    =>'required',
            "name"     =>'required',
            "email"         =>'required',
            "phone"       =>'required',
            "message"         =>'required'
            
        ]);
    
        $slider = blogcomment::create([
            	"blogs_id" =>$request->username,
            	"co_name" =>$request->name,
            	"co_email" =>$request->email,
                "co_phone" =>$request->phone,
                'co_text' => $request->message,
        ]);

        if ($slider)
            return response()->json([
                "status"    => '1',
                "msg"       => 'Comment has been added'
            ]);
        else
            return response()->json([
                "status"    => '0',
                "msg"       => 'Sorry, please try again'
            ]);
            
    }

    //search in single blog
    public function autocomplete(Request $request)
    {
        $movies = [];

        if($request->has('q')){
            $search = $request->q;
            $movies =Blogs::select('blogs_tilte','blogs_slug')
            		->where('blogs_tilte', 'LIKE', "%$search%")
            		->get();
        }
        return response()->json($movies);
    }


    public function storeInquiry(Request $request)
    {
        
        $request->validate([
            
            "first_name"    =>'required',
            "last_name"     =>'required',
            "email"         =>'required',
            "country"       =>'required',
            "phone"         =>'required'
            
        ]);
    
        $slider = inquer::create([
            	"i_firstName" =>$request->first_name,
            	"i_LastName" =>$request->last_name,
            	"i_email" =>$request->email,
                "i_country" =>$request->country,
                'i_key' => $request->countryKey,
                "i_phone" =>$request->phone,
                "i_comment" =>$request->message,
                'seen' => '0'
        ]);

        if ($slider)
            return response()->json([
                "status"    => '1',
                "msg"       => 'Message was sent successfully .. we will contact you '
            ]);
        else
            return response()->json([
                "status"    => '0',
                "msg"       => 'Sorry, please try again'
            ]);
            
    }
}
