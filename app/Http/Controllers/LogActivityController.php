<?php

namespace App\Http\Controllers;

use App\LogActivity;
use Illuminate\Http\Request;
use DataTables;

class LogActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $logActivity = LogActivity::latest()->get();
            return Datatables::of($logActivity)
                ->addIndexColumn()
                ->addColumn('aksi', function ($row) {
                    $btn = '<button type="button" class="hapus-log btn btn-danger btn-sm" data-id="' . $row->id . '" data-subject="' . $row->subject . '" data-url="' . $row->url . '" data-method="' . $row->method . '" data-ip="' . $row->ip . '" data-agent="' . $row->agent . '" data-user_name="' . $row->user_name . '" data-toggle="modal" data-target="#hapus-log"><i class="fa fa-trash-o"></i></button>';
                    return $btn;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        return view('logactivity.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LogActivity  $logActivity
     * @return \Illuminate\Http\Response
     */
    public function show(LogActivity $logActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LogActivity  $logActivity
     * @return \Illuminate\Http\Response
     */
    public function edit(LogActivity $logActivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LogActivity  $logActivity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LogActivity $logActivity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LogActivity  $logActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $logActivity = LogActivity::findOrFail($request->id);
        if (!LogActivity::destroy($request->id)) {
            return redirect()->back();
        } else {
            $logActivity->delete();

            $response = [
                'success' => true,
                'data'  => $logActivity,
                'message' => 'Berhasil dihapus!'
            ];
            return response()->json($response, 200);
        }
    }
}
