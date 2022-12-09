<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    
    public function about(){
        return view('frontend.about');
    }
    
    public function services(){
        return view('frontend.services');
    }
    
    public function pricing(){
        return view('frontend.pricing');
    }
    
    public function blog(){
        return view('frontend.blog');
    }
    
    public function contact(){
        return view('frontend.contact');
    }
}
