<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan; // kalo ini ilang : Class "App\Http\Controllers\Pesan" not found

class PesanController extends Controller
{
    public function index(){
        $pesan = Pesan::all();
        return view('content.pesan.index', compact('pesan'));
    }

    public function save(Request $request)
    {
        $pesan = new Pesan;
        $pesan->nama = $request->nama;
        $pesan->email = $request->email;
        $pesan->no_telp = $request->no_telp;
        $pesan->pesan = $request->pesan;
        $pesan->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        $pesan = Pesan::find($id);
        return view('content.pesan.edit', compact('pesan'));
    }

    public function update(Request $request, $id)
    {
        $pesan = Pesan::find($id);
        $pesan->nama = $request->nama;
        $pesan->email = $request->email;
        $pesan->no_telp = $request->no_telp;
        $pesan->pesan = $request->pesan;
        $pesan->save();

        return redirect()->route('pesan');
    }

    public function delete($id)
    {
        $pesan = Pesan::find($id)->delete();
        return redirect()->route('pesan');

    }

}
