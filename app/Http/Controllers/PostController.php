<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display all posts
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('post.index_post', compact('posts'));
    }

    /**
     * Show the form for creating a new post
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('categories')->pluck('name', 'name');
        return view('post.create_post', compact('categories'));
    }

    /**
     * Save a new post
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input= $request->validate([
            'name'=>'required|min:3|max:20',
            'description'=>'requires|min:3|max:50'
        ]);
        Post::create($input);
        return redirect('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show_post')->with('post', $post);
    }

    /**
     * Show the form for editing the post
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $category = DB::table('categories')->pluck('name', 'name');
        return view('post.edit_post', compact('post', 'category'));
    }

    /**
     * Update the post in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input= $request->validate([
            'name'=>'required|min:3|max:20',
            'description'=>'requires|min:3|max:50'
        ]);
        $post = Post::findOrFail($id);
        $post->update($input);
        return redirect('post');
    }

    /**
     * Remove post
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        return redirect('post');
    }
}
