<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        return view('slider.index');
    }
    public function create()
    {
        $slider = new Slider();
        return view('slider.edit', compact('slider'));
    }
}
