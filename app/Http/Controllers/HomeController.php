<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\Jabatan;
use App\Models\Testimoni;
use App\Models\Pesan;  
use App\Models\Subscribe; 
use App\Models\Blog;
use App\Models\Gallery;
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
        $jumlah_karyawan = Karyawan::all()->count();
        $jumlah_jabatan = Jabatan::all()->count();
        $jumlah_testimoni = Testimoni::all()->count();
        $jumlah_pesan = Pesan::all()->count();
        $jumlah_subscribe = Subscribe::all()->count();
        $jumlah_blog = Blog::all()->count();
        $jumlah_gallery = Gallery::all()->count();

        return view('content.index')
        ->with('jumlah_karyawan', $jumlah_karyawan)
        ->with('jumlah_jabatan', $jumlah_jabatan)
        ->with('jumlah_testimoni', $jumlah_testimoni)
        ->with('jumlah_pesan', $jumlah_pesan)
        ->with('jumlah_subscribe', $jumlah_subscribe)
        ->with('jumlah_blog', $jumlah_blog)
        ->with('jumlah_gallery', $jumlah_gallery);
    }
    
    public function index()
    {
        return view('content.home');
    }

    public function indexnew()
    {
        $jumlah_karyawan = Karyawan::all()->count();
        $jumlah_jabatan = Jabatan::all()->count();
        $jumlah_testimoni = Testimoni::all()->count();
        $jumlah_pesan = Pesan::all()->count();
        $jumlah_subscribe = Subscribe::all()->count();
        $jumlah_blog = Blog::all()->count();
        $blog = Blog::all();
        $gallery = Gallery::all();
        $testimoni = Testimoni::where('status', 'AKTIF')->get();

        return view('content.indexnew', compact('testimoni','blog','gallery','jumlah_karyawan','jumlah_jabatan','jumlah_testimoni','jumlah_pesan','jumlah_subscribe','jumlah_blog'));
        
        // ->with('jumlah_karyawan', $jumlah_karyawan)
        // ->with('jumlah_jabatan', $jumlah_jabatan)
        // ->with('jumlah_testimoni', $jumlah_testimoni)
        // ->with('jumlah_pesan', $jumlah_pesan)
        // ->with('jumlah_subscribe', $jumlah_subscribe)
        // ->with('jumlah_blog', $jumlah_blog);
    }

    public function contactnew()
    {
        return view('content.contactnew');
    }

    public function teamnew()
    {
        $karyawan = Karyawan::all();

        return view('content.team', compact('karyawan'));
    }
    
    public function aboutnew()
    {

        return view('content.aboutnew');
    }

}
