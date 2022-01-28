<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;

class TestimoniController extends Controller
{
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('content.testimoni.index', compact('testimoni'));
    }

    public function create()
    {
        $testimoni = Testimoni::all();
        return view('content.testimoni.create', compact('testimoni'));
    }

    public function save(Request $request) //Request class bawaan laravel buat ngambil data dari yg ada $request (nama=$request)
    {        
        $testimoni = new testimoni;
        $testimoni->nama = $request->nama; //nama itu name di dalam input name = nama
        $testimoni->email = $request->email;
        $testimoni->no_telp = $request->no_telp;
        $testimoni->pesan = $request->pesan;
        $testimoni->status = $request->status; 
        $testimoni->save();

        return redirect()->route('testimoni');
    }

    public function edit($id)
    {
        $testimoni = Testimoni::find($id);
        return view('content.testimoni.edit', compact('testimoni'));
    }

    public function update(Request $request, $id)
    {
        $testimoni = Testimoni::find($id);
        $testimoni->nama = $request->nama;  
        $testimoni->email = $request->email;
        $testimoni->no_telp = $request->no_telp;
        $testimoni->pesan = $request->pesan;
        $testimoni->status = $request->status; 
        $testimoni->save();

        return redirect()->route('testimoni');
    }

    public function updateStatus($id)
    {
        $testimoni = Testimoni::find($id);
        if ($testimoni->status == 'AKTIF') {
            $status = "NONAKTIF";
        } else {
            $status = "AKTIF";
        }
        $testimoni->status = $status;
        $testimoni->save();

        return redirect()->route('testimoni');
    }

    public function delete($id)
    {
        $testimoni = Testimoni::find($id)->delete();
        return redirect()->route('testimoni');
    }
}

