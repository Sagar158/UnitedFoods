<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Models\Certifications;
use Yajra\DataTables\Facades\DataTables;

class CertificationsController extends Controller
{
    public $title = 'Certifications';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = $this->title;
        return view('certifications.index',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = $this->title;
        $certification = new Certifications;
        return view('certifications.edit', compact('title','certification'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'pdf' => 'required|file|mimes:pdf|max:10000', // Example validation rules
        ]);

        $certification = new Certifications;
        $certification->title = $request->title;
        if ($request->hasFile('pdf'))
        {
            $filePath = Helper::uploadPdfFile($request);
            $certification->pdf = $filePath;
        }
        $certification->save();
        return redirect()->route('home.certifications.index')->with('success','Certification created successfully.');
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
        $title = $this->title;
        $certification = Certifications::findOrFail($id);
        return view('certifications.edit', compact('title','certification'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'pdf' => 'file|mimes:pdf|max:10000', // Example validation rules
        ]);

        $certification =  Certifications::findOrFail($id);
        $certification->title = $request->title;
        if ($request->hasFile('pdf'))
        {
            $filePath = Helper::uploadPdfFile($request, $certification->pdf);
            $certification->pdf = $filePath;
        }
        $certification->save();
        return redirect()->route('home.certifications.index')->with('success','Certification updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getCertificationsData()
    {
        $query = Certifications::query(); // Modify as needed to get your data

        return DataTables::of($query)
            ->editColumn('pdf', function ($certification) {
                $pdfUrl = asset($certification->pdf);
                return '<a href="'. $pdfUrl .'" target="_blank">Certificate Link</a>';
            })
            ->addColumn('action', function ($certification) {
                return '
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="">
                                    <a class="dropdown-item" href="'.route('home.certifications.edit', $certification->id).'">Edit</a>
                                    <a class="dropdown-item delete-record" href="#" data-route="'.route('home.certifications.destroy', $certification->id).'" data-id="'.$certification->id.'">Delete</a>
                                </div>
                            </div>
                        ';
            })
            ->rawColumns(['pdf', 'action'])
            ->make(true);
    }
}
