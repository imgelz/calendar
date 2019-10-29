<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Kategori;
use App\LogActivity;
use Auth;

class FrontendController extends Controller
{
    public function display(Request $request)
    {
        $events = Event::where('id_group', Auth::user()->id_group)->get();
        return view('frontend.display', compact('events'));
    }

    public function kategori(Request $request)
    {
        $kategori = Kategori::all();
        return view('frontend.category', compact('kategori'));
    }

    public function activity(Request $request)
    {
        $logActivity = LogActivity::where('id_group', Auth::user()->id_group)->get();
        return view('frontend.activity', compact('logActivity'));
    }
}
