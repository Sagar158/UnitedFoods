<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

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

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $slider = new Slider();
        $slider->title = $validatedData['title'];
        $slider->subtitle = $validatedData['subtitle'];
        $slider->description = $validatedData['description'];
        $slider->image = Helper::imageUpload($request->file('image'));
        $slider->save();

        return redirect()->route('home.slider.index')->with('success', 'Slider added successfully.');

    }

    public function getSlidersData()
    {
        $query = Slider::query(); // Modify as needed to get your data

        return DataTables::of($query)
            ->addColumn('action', function ($slider) {
                return '<a href="'.route('home.slider.edit', $slider->id).'">Edit</a>'; // Example action
            })
            ->make(true);
    }
}
