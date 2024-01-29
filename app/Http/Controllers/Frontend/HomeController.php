<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Teams;
use App\Models\Slider;
use App\Models\AboutUs;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Models\Certifications;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::first();
        $slides = Slider::select('image','title','subtitle','description')->get();

        return view('frontend.index',compact('aboutUs','slides'));
    }

    public function aboutus()
    {
        $aboutUs = AboutUs::first();
        $teams = Teams::select('name','designation','image')->get();
        return view('frontend.about-us', compact('aboutUs','teams'));
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

    public function certificates()
    {
        $certificates = Certifications::orderBy('id','desc')->get();
        return view('frontend.certificates',compact('certificates'));
    }

    public function contactStore(Request $request)
    {
        ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->comments
        ]);

        return response()->json(['message' => 'Your Query has been successfully submitted to our team. Our team will contact you soon.']);
    }
}
