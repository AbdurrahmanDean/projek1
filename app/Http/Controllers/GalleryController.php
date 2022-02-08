<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index(){
        $gallery = Gallery::all();

        return view('content.gallery.index', compact('gallery'));
    }

    public function create(){
        return view('content.gallery.create');
    }

    public function save(Request $request){

        $file = $request->file('file');
        $file_name = $file->getClientOriginalName();
        $file->move('image/foto', $file_name);

        $gallery = new gallery;
        $gallery->nama = $request->nama;
        $gallery->deskripsi = $request->deskripsi;
        $gallery->foto = $file_name;
        $gallery->save();

        return redirect()->route('gallery');
    }

    public function edit($id){
        $gallery = Gallery::find($id);
        
        return view('content.gallery.edit', compact ('gallery'));
    }

    public function update(Request $request, $id){
        $gallery = Gallery::find($id);

        if($request->hasFile('file')){
            $file = $request->file('file');
            $file_name =  $file->getClientOriginalName();
            $file->move('image/foto', $file_name);
        } else {
            $file_name = $gallery->foto;
        }

        $gallery->nama = $request->nama;
        $gallery->deskripsi = $request->deskripsi;
        $gallery->foto = $file_name;
        $gallery->save();

        return redirect()->route('gallery');
    }

    public function delete($id){
        $gallery = Gallery::find($id)->delete();
        return redirect()->route('gallery');
    }
}
