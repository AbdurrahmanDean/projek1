<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;

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
        $testimoni = Testimoni::where('status', 'AKTIF')->get();
        return view('content.indexnew', compact('testimoni'));
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
