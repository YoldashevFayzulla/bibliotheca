<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\Request;

class ExtraController extends Controller
{
    public function info(Post $id){
//        $post=Post::all();
//        dd($id);
        return view('show',compact('id'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'string|required',
            'number'=>'required ',
            'massage'=>'string|required',
        ]);
        Contact::create($request->all());
        return redirect()->back()->with('success','success');
    }
}
