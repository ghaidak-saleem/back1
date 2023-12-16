<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::all();
        return view('post.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $post =new Post();
        $post->title =$request->input('title');
        $post->description =$request->input('description');
        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName=time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/'),$imageName);
            $post->image=$imageName;
        }
        $post->save();
        return redirect()->route('post.index')->with('success', 'Data saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        
        return view('post.show', compact('post'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image'=>'image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        $post->title =$request->input('title');
        $post->description =$request->input('description');
        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName=time(). '.' .$image->getClientOriginalExtension();
            $image->move(public_path('images/'),$imageName);
            $post->image=$imageName;
        }
        $post->save();
        return redirect()->route('post.index')->with('success', 'Data saved successfully');


    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
      $post->delete();
      return redirect()->route('post.index');
    }
}
