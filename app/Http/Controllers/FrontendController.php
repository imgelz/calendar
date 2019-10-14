<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Kategori;
use App\LogActivity;

class FrontendController extends Controller
{
    public function display(Request $request)
    {
        $events = Event::with('kategori')->where('title', 'like', "%$request->title%")->paginate(9);
        return view('frontend.display', compact('events'));
    }

    public function kategori(Request $request)
    {
        $kategori = Kategori::all();
        return view('frontend.category', compact('kategori'));
    }

    public function activity(Request $request)
    {
        $logActivity = LogActivity::with('user')->where('subject', 'like', "%$request->subject%")->get();
        return view('frontend.activity', compact('logActivity'));
    }
}
