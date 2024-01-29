<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TeamsController extends Controller
{
    public $title = 'Teams';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = $this->title;
        return view('teams.index',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = $this->title;
        $team = new Teams();
        return view('teams.edit', compact('team','title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'prefix' => 'required',
            'designation' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $team = new Teams();
        $team->name = $validatedData['name'];
        $team->designation = $validatedData['designation'];
        $team->prefix = $validatedData['prefix'];
        $team->image = Helper::imageUpload($request->file('image'));
        $team->save();

        return redirect()->route('home.aboutus.team.index')->with('success', 'Team member added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teams $teams)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $teamId)
    {
        $title = $this->title;
        $team = Teams::findOrFail($teamId);
        return view('teams.edit', compact('team','title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $teamId)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'prefix' => 'required',
            'designation' => 'nullable|string|max:255',
        ]);

        $team = Teams::findOrFail($teamId);
        $team->name = $validatedData['name'];
        $team->designation = $validatedData['designation'];
        $team->prefix = $validatedData['prefix'];
        if($request->has('image'))
        {
            $team->image = Helper::imageUpload($request->file('image'));
        }
        $team->save();

        return redirect()->route('home.aboutus.team.index')->with('success', 'Team member updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $teamId)
    {
        $teamImages = Teams::where('id',$teamId)->select('image')->pluck('image')->toArray();
        Helper::deleteFiles($teamImages);

        $record = Teams::destroy($teamId);
        return response()->json(['success' => $record]);
    }

    public function getTeamData()
    {
        $query = Teams::query(); // Modify as needed to get your data

        return DataTables::of($query)
            ->editColumn('name', function ($team) {
                $prefix = Teams::$prefix[$team->prefix];
                return $prefix.' '. $team->name;
            })
            ->editColumn('image', function ($team) {
                $imageUrl = asset($team->image);
                return '<img src="'. $imageUrl .'" style="height: 50px; width: 50px; border-radius: 50%;">';
            })
            ->addColumn('action', function ($team) {
                return '
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="">
                                    <a class="dropdown-item" href="'.route('home.aboutus.team.edit', $team->id).'">Edit</a>
                                    <a class="dropdown-item delete-record" href="#" data-route="'.route('home.aboutus.team.destroy', $team->id).'" data-id="'.$team->id.'">Delete</a>
                                </div>
                            </div>
                        ';
            })
            ->rawColumns(['image', 'action','name'])
            ->make(true);
    }

}
