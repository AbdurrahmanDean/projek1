<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        return view('content.index');
    }
    
    public function index()
    {
        return view('content.home');
    }

    public function indexnew()
    {
        return view('content.indexnew');
    }

    public function contactnew()
    {
        return view('content.contactnew');
    }
    
    public function aboutnew()
    {
        return view('content.aboutnew');
    }

}
