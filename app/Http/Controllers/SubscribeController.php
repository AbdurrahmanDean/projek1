<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribe;

class SubscribeController extends Controller
{
    public function index(){
        $subscribe = Subscribe::all();
        return view('content.subscribe.index', compact('subscribe'));
    }

    public function save(Request $request){
        $subscribe = new subscribe();
        $subscribe->email = $request->email;
        $subscribe->save();

        return redirect()->route('subscribe');
    }

    public function delete($id){
        $subscribe = Subscribe::find($id)->delete();
        return redirect()->route('subscribe');
    }
}
