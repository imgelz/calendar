<?php

namespace App\Http\Controllers;

use App\Group;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('group.index');
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
        $grup = new Group();
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

        return redirect()->route('group.index');
    }

    public function gabung(Request $request)
    {
        $group_code = DB::table('groups')->where('kode', $request->kode)->get();
        if ($group_code->count() > 0) {
            $user_update = User::findOrFail(Auth::user()->id);
            $user_update->id_group = $group_code[0]->id;
            $user_update->save();

            return redirect()->route('group.index');
        }

        if ($group_code->count() == 0) {
            return redirect()->back()->with('error', 'Kode group tidak ditemukan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        return view('group.verify');
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
