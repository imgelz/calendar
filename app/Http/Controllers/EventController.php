<?php

namespace App\Http\Controllers;

use App\Event;
use Session;
use Illuminate\Http\Request;
use DataTables;
use Yajra\DataTables\Contracts\DataTable;
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
            $event[] = \Calendar::event(
                $row->title,
                false,
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
        \LogActivity::addToLog('Menambah Jadwal Kegiatan');

        $request->validate([
            'title' => 'required|unique:events',
            'color' => 'required|unique:events',
            'description' => 'required|max:30',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
        $events = new Event;
        $events->title = $request->title;
        $events->color = $request->color;
        $events->description = $request->description;
        $events->start_date = $request->start_date;
        $events->end_date = $request->end_date;
        $events->save();

        $response = [
            'success' => true,
            'data'  => $events,
            'message' => 'Berhasil Menambah!'
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if ($request->ajax()) {
            $events = Event::latest()->get();
            return Datatables::of($events)
                ->addIndexColumn()
                ->addColumn('aksi', function ($row) {
                    $btn = '<button type="submit" title="Edit" class="edit-jadwal btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-edit" data-id="' . $row->id . '" data-title="' . $row->title . '" data-color="' . $row->color . '" data-description="' . $row->description . '" data-start_date="' . $row->start_date . '" data-end_date="' . $row->end_date . '"> <i class="fa fa-edit"></i></button>';
                    $btn = $btn . ' <button type="submit" title="Hapus" class="hapus-jadwal btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-hapus" data-id="' . $row->id . '" data-title="' . $row->title . '" data-color="' . $row->color . '" data-description="' . $row->description . '" data-start_date="' . $row->start_date . '" data-end_date="' . $row->end_date . '"><i class="fa fa-trash-o"></i></button>';
                    return $btn;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        return view('calendar.display');
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
        return view('calendar.edit', compact('events'));
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
        \LogActivity::addToLog('Mengubah Jadwal Kegiatan');


        $this->validate($request, [
            'title' => 'required',
            'color' => 'required',
            'description' => 'required|max:30',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
        $events = Event::findOrFail($request->id);
        $events->title = $request->title;
        $events->color = $request->color;
        $events->description = $request->description;
        $events->start_date = $request->start_date;
        $events->end_date = $request->end_date;
        $events->save();

        $response = [
            'success' => true,
            'data'  => $events,
            'message' => 'Berhasil diubah!'
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        \LogActivity::addToLog('Menghapus Jadwal Kegiatan');

        $events = Event::findOrFail($request->id);
        if (!Event::destroy($request->id)) {
            return redirect()->back();
        } else {
            $events->delete();

            $response = [
                'success' => true,
                'data'  => $events,
                'message' => 'Berhasil dihapus!'
            ];
            return response()->json($response, 200);
        }
    }
}
