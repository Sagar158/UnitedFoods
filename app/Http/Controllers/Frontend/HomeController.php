<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function aboutus()
    {
        return view('frontend.about-us');
    }

    public function products()
    {
        return view('frontend.products');
    }

    public function events(){

    }
    public function contactus(){
        return view('frontend.contact-us');
    }
}
