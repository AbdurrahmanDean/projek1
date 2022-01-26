<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;
use \Auth;

class JabatanController extends Controller
{
    public function index() 
    {
        // dd($jabatan);
        $jabatan = Jabatan::all();
        return view('content.jabatan.index', compact('jabatan'));
    }

    public function create()
    {
        return view('content.jabatan.create');
    }

    public function save(Request $request)
    {
        $jabatan = new jabatan;
        $jabatan->nama_jabatan = $request->nama;
        $jabatan->save();

        return redirect()->route('jabatan');
    }

    public function edit($id)
    {
        $jabatan = Jabatan::find($id);
        return view('content.jabatan.edit', compact('jabatan'));
    }

    public function update(Request $request, $id)
    {
        $jabatan = Jabatan::find($id);
        $jabatan->nama_jabatan = $request->nama;
        $jabatan->save();

    return redirect()->route('jabatan');
    }

    public function delete($id)
    {
        $jabatan = Jabatan::find($id)->delete();
        return redirect()->route('jabatan');
    }

}
