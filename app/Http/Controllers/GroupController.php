<?php

namespace App\Http\Controllers;

use App\Group;
use App\User;
use Auth;
use DataTables;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $user = User::where('id_group', Auth::user()->id_group)->get();
            return Datatables::of($user)
                ->addIndexColumn()
                ->addColumn('created_at', function ($row) {
                    $created_at = Carbon::parse($row->created_at)->format('l, d M Y || H:i:s');
                    return $created_at;
                })
                ->rawColumns(['created_at'])
                ->make(true);
        }
        return view('frontend.group');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        $grup = new Group;
        $this->validate($request, [
            'nama_grup' => 'required|unique:groups'
        ]);
        $grup->nama_grup = $request->nama_grup;
        $grup->kode = str_random(8);
        $grup->save();

        $user_group = DB::table('groups')->where('nama_grup', $request->nama_grup)->first();
        $update_user = User::findOrFail(Auth::user()->id);
        $update_user->id_group = $user_group->id;
        $update_user->save();

        return view('frontend.group');
    }

    public function gabung(Request $request)
    {
        $group_code = DB::table('groups')->where('kode', $request->kode)->get();
        if ($group_code->count() > 0) {
            $user_update = User::findOrFail(Auth::user()->id);
            $user_update->id_group = $group_code[0]->id;
            $user_update->save();

            return view('frontend.group');
        }

        if ($group_code->count() == 0) {
            return redirect()->back()->with('error', 'Group tidak ditemukan !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if ($request->ajax()) {
            $group = Group::latest()->get();
            return Datatables::of($group)
                ->addIndexColumn()
                ->addColumn('aksi', function ($row) {
                    $btn = '<button type="button" class="hapus-group btn btn-danger btn-sm" data-id="' . $row->id . '" data-nama_gruo="' . $row->nama_grup . '" data-kode="' . $row->kode . '" data-toggle="modal" data-target="#hapus-group"><i class="fa fa-trash-o"></i></button>';
                    return $btn;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        return view('group.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }
}
