<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Events;
use App\Helpers\Helper;
use App\Models\EventImages;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public $title = 'Events';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = $this->title;
        $events = Events::select('id','name','from','to')->get();
        $transformedEvents = $events->map(function ($event) {
            $fromDate = date('Y-m-d', strtotime($event->from));
            $toDate = date('Y-m-d', strtotime($event->to));

            return [
                'id' => $event->id,
                'start' => $fromDate,
                'end' => $toDate,
                'title' => $event->name
            ];
        });

        return view('events.index',compact('title','transformedEvents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = $this->title;
        $event = new Events;
        return view('events.edit',compact('title','event'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'from' => 'required',
            'to' => 'required',
        ]);

        $event = new Events;
        $event->name = $validatedData['name'];
        $event->from = $validatedData['from'];
        $event->to = $validatedData['to'];
        $event->description = $validatedData['description'];
        $event->save();

        if($request->has('images'))
        {
            $isFirstImage = true;
            foreach($request->images as $image)
            {
                EventImages::create([
                    'event_id' => $event->id,
                    'image' => Helper::imageUpload($image),
                    'primary' => $isFirstImage,
                ]);
                $isFirstImage = false;
            }
        }

        return redirect()->route('events.index')->with('success', 'Event added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Events::with(['images'])->findOrFail($id);
        $title = $this->title;
        return view('events.show',compact('title','event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Events::findOrFail($id);
        $title = $this->title;
        return view('events.edit',compact('title','event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'from' => 'required',
            'to' => 'required',
        ]);

        $event = Events::findOrFail($id);
        $event->name = $validatedData['name'];
        $event->from = $validatedData['from'];
        $event->to = $validatedData['to'];
        $event->description = $validatedData['description'];
        $event->save();

        if($request->has('images'))
        {
            $isFirstImage = EventImages::where('product_id', $event->id)->where('primary', true)->doesntExist();

            foreach($request->images as $image)
            {
                EventImages::create([
                    'event_id' => $event->id,
                    'image' => Helper::imageUpload($image),
                    'primary' => $isFirstImage,
                ]);
                $isFirstImage = false;
            }
        }

        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $eventImages = EventImages::where('event_id',$id)->select('image')->pluck('image')->toArray();
        Helper::deleteFiles($eventImages);
        Events::destroy($id);
        EventImages::where('event_id',$id)->delete();
        return redirect()->route('events.index')->with('success','Event deleted successfully');
    }
}
