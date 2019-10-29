<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Laratrust\LaratrustFacade as Laratrust;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if (Laratrust::hasRole('admin')) {
            return redirect('/admin');
        }
        if (Laratrust::hasRole('member')) {
            return redirect('/');
        } else if (Auth::user()->grup()->count() > 0) {
            return redirect('/group');
        } else if (Auth::user()->grup()->count() == 0) {
            return redirect('/verify-group');
        }
    }
}
