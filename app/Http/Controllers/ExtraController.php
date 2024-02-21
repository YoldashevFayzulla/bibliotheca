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
//        dd($request);
        $request->validate([
            'name'=>'required|string',
            'number'=>'required|numeric|digits:10',
            'massage'=>'required'
        ],[
            'name'=>"ismingizni kiriting",
            'number'=>"9 xonali son bolishi kerak",
            'massage'=>"xabar toldirilgan bolishi kerak"
        ]);

        Contact::create([
            'name'=>$request->name,
            'number'=>$request->number,
            'massage'=>$request->massage,
            'book_id'=>$request->id,

        ]);
        return redirect()->back()->with('success','success');
    }
    public function extra(){
        $contacts=Contact::all();
        return view('admin.contact.index',compact('contacts'));
    }
    public function destroy(Contact $id){
//        dd($id);
        $id->delete();
        return redirect()->back()->with('success','deleted');
    }
}
