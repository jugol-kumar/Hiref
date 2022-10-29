<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
//        return inertia('Frontend/Master');
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }
    public function blog(){
        return view('frontend.blog');
    }

    public function faq()
    {
        return view('faq');
    }

    public function details($slug)
    {
        $course = Course::where('slug', $slug)->first();
        return view('details', compact('course'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function checkout($slug)
    {
        $course = Course::where('slug', $slug)->first();
        return view('checkout', compact('course'));
    }
}
