<?php

namespace App\Http\Controllers;

use App\Event;
use Session;
use Illuminate\Http\Request;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        $event = [];

        foreach ($events as $row) {
            $enddate = $row->end_date . "24:00:00";
            $event[] = \Calendar::event(
                $row->title,
                true,
                new \DateTime($row->start_date),
                new \DateTime($row->end_date),
                $row->id,
                [
                    'color' => $row->color,
                ]
            );
        }

        $calendar = \Calendar::addEvents($event);
        return view('calendar.index', compact('events', 'calendar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::all();
        return View('calendar.create', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $events = new Event;
        $events->title = $request->title;
        $events->color = $request->color;
        $events->start_date = $request->start_date;
        $events->end_date = $request->end_date;
        $events->save();

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan jadwal kegiatan <b>" . $events->title . "</b>"
        ]);
        return redirect()->route('event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $events = Event::all();
        return View('calendar.display')->with('events', $events);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = Event::findOrFail($id);
        return view('calendar.update', compact('events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $events = Event::findOrFail($id);
        $events->title = $request->title;
        $events->color = $request->color;
        $events->start_date = $request->start_date;
        $events->end_date = $request->end_date;;
        $events->save();

        Session::flash("flash_notification", [
            "level" => "warning",
            "message" => "Berhasil mengubah jadwal kegiatan <b>" . $events->title . "</b>"
        ]);
        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = Event::findOrFail($id);
        if (!Event::destroy($id)) {
            return redirect()->back();
        }
        Session::flash("flash_notification", [
            "level" => "danger",
            "message" => "Berhasil menghapus jadwal kegiatan <b>" . $events->title . "</b>"
        ]);
        return redirect()->route('event.index');
    }
}
