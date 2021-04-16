<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);

        return view('index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3'],
            'category' => ['required', 'min:3'],
            'image' => 'file'
        ]);
        
        if(request('image')) {
            $attributes['image'] = request('image')->store('images');
        }

        Post::create($attributes);

        return redirect(route('posts.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
       
        $attributes = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3'],
            'category' => ['required', 'min:3'],
            'image' => 'file'
        ]);
        
        if(request('image')) {
            $attributes['image'] = request('image')->store('images');
        }
        $post->update($attributes);
        // $post->update($this->validatePost());
        
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');

    }

    public function search(Request $request) {

        $search = $request->get('search');

        $posts = Post::where('title', 'like', '%'.$search.'%')->paginate(10);

        return view('index', compact('posts'));

    }

    protected function validatePost(){
        return $attributes = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3'],
            'category' => ['required', 'min:3'],
            'image' => 'file'
            ]);
            if(request('image')) {
                dd('asdasdsd');
                $attributes['image'] = request('image')->store('images');
            }
            
            
    }
}
