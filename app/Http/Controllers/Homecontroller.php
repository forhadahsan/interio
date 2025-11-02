<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        return view('frontend.pages.home');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }
    public function service()
    {
        return view('frontend.pages.services');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function team()
    {
        return view('frontend.pages.team');
    }
    public function testimonial()
    {
        return view('frontend.pages.testimonial');
    }
    public function portfolio()
    {
        return view('frontend.pages.portfolio');
    }
    public function faq()
    {
        return view('frontend.pages.faq');
    }
    public function comingSoon()
    {
        return view('frontend.pages.comingsoon');
    }
    public function blog()
    {
        return view('frontend.pages.blog');
    }
    public function blog1()
    {
        return view('frontend.pages.blog-single');
    }


}
