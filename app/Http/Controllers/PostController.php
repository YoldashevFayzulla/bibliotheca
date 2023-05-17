<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::paginate(10);
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'string|required',
            'description'=>'string|required',
            'price'=>'required|max:10',
            'category_id'=>'required|max:10',
//            'image'=>'image|required',
        ]);
        $post=new Post();
//        dd($request);
        if($request->hasfile('image')){
//            dd('salom');
            $file= $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('image'),$filename);
            $post['name']=$request->name;
            $post['description']=$request->description;
            $post['price']=$request->price;
            $post['category_id']=$request->category_id;
            $post['image']=$filename;
        }
        $post->save();
        return redirect()->route('post.index')->with('success','created');
    }


//
//Post::create($request->all());
//        return redirect()->route('post.index');


    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
//        dd('salom');
        if (!isset($category->id)) {
            $category->id=1;
        }
        $posts = Post::where('category_id', $category->id)->get();
        $categories=Category::get();
        return view("index",compact('categories','posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories=Category::all();
        return view('admin.posts.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'name'=>'string|required',
            'description'=>'string|required',
            'price'=>'required|max:10',
            'category_id'=>'required|max:10',
//            'image'=>'image|required',
        ]);

        $user= auth()->user()->name;
        if($request->hasfile('thumbnail')){
            $file= $request->file('thumbnail');
            $filename = date('YmdHi').$file->getClientOriginalExtension();
            $file->move(public_path('image'),$filename);
            $post['name']=$request->name;
            $post['description']=$request->description;
            $post['price']=$request->price;
            $post['category_id']=$request->category_id;
            $post['image']=$filename;
        }

        $post->update();
        return redirect()->route('post.index')->with('success','muofaqiyaatli saqlandi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->with('success','deleted');
    }

    public function search(){
        $search_text = $_GET['query'];
        $posts=Post::where('name','Like','%'.$search_text.'%')->paginate();
        return  view('admin.posts.index',compact('posts'));
    }
}
