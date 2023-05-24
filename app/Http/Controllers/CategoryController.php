<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        return view('admin.dashboard',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'name'=>'string|required',
        ]);
        Category::create($request->all());
        return redirect()->route('category.index')->with('session','muofaqiyatliy qo`shildi');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $categories=Category::all();
        $posts=Post::all();
        return view('index',compact('categories','posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {

        $request->validate([
            'name'=>'string|required',
        ]);

        $category->update($request->all());
        return redirect()->route('category.index')->with('session','malumot o`zgartirildi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
//        $post=Post::find($category->category_id);
//        $post->delete();
        return redirect()->back()->with('session','muofaqiyatliy o`cirildi');
    }

    public function search(){
        $search_text = $_GET['query'];
        $categories=Category::all();
        $posts=Post::where('name','Like','%'.$search_text.'%')->get();
        return  view('index',compact('posts','categories'));
    }
}
