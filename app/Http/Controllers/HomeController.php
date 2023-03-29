<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function about()
    {
        return view('frontend.pages.about');  
    }

    public function service($slug)
    {
        if($slug == 'web-development')
        {
            return view('frontend.pages.services.web');  
        }
        else if($slug == 'mobile-app-development')
        {
            return view('frontend.pages.services.mobile');
        }
       
    }

    public function portfolio()
    {   
        $posts = Student::all();
        return view('frontend.pages.portfolio',compact('posts'));  
    }

    public function contact()
    {
        return view('frontend.pages.contact');  
    }
}
