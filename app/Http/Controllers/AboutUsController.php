<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{

    public $title = 'About Us';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = $this->title;
        $aboutUs = AboutUs::first();
        return view('about-us.index',compact('aboutUs','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'our_mission' => 'required|string',
            'our_vission' => 'required|string',
         ]);

         $aboutUs =  AboutUs::findOrFail(1);
        $aboutUs->our_mission = $validatedData['our_mission'];
        $aboutUs->our_vission = $validatedData['our_vission'];
        $aboutUs->privacy_policy = $validatedData['privacy_policy'];
        $aboutUs->terms = $validatedData['terms'];
        $aboutUs->save();
        return redirect()->route('home.aboutus.index')->with('success', 'Mission & Vision added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'our_mission' => 'required|string',
            'our_vission' => 'required|string',
            'privacy_policy' => 'required|string',
            'terms' => 'required|string',
         ]);

        $aboutUs =  AboutUs::findOrFail(1);
        $aboutUs->our_mission = $validatedData['our_mission'];
        $aboutUs->our_vission = $validatedData['our_vission'];
        $aboutUs->privacy_policy = $validatedData['privacy_policy'];
        $aboutUs->terms = $validatedData['terms'];
        $aboutUs->save();
        return redirect()->route('home.aboutus.index')->with('success', 'Mission & Vision updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
