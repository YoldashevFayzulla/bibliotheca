<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ExtraController extends Controller
{
    public function info(Post $id){
//        $post=Post::all();
//        dd($id);
        return view('show',compact('id'));
    }
}
