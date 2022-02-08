<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
    
class BlogController extends Controller
{
    public function index(){
        $blog = Blog::all();

        return view('content.blog.index', compact('blog'));
    }

    public function create(){

        return view('content.blog.create');
    }

    public function save(Request $request){
        $file = $request->file('file');
        $file_name = $file->getClientOriginalName();
        $file->move('image/foto', $file_name);

        $blog = new Blog;
        $blog->judul_artikel = $request->judul_artikel;
        $blog->deskripsi = $request->deskripsi;
        $blog->foto = $file_name;
        $blog->save(); 

        return redirect()->route('blog');
    }

    public function edit($id){
        $blog = Blog::find($id);

        return view('content.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id){
        $blog = Blog::find($id);

        if($request->hasFile('file')){
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
	    	$file->move('image/foto', $file_name);
		} else {
			$file_name = $blog->foto;
        }
        
        $blog->judul_artikel = $request->judul_artikel;
        $blog->deskripsi = $request->deskripsi;
        $blog->foto = $file_name;
        $blog->save();

        return redirect()->route('blog');    
    }

    public function delete($id){
        $blog = Blog::find($id)->delete();
        return redirect()->route('blog');
    }
}
