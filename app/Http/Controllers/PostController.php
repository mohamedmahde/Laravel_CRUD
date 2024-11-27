<?php

namespace App\Http\Controllers;

use App\Models\post;
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

        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);
        // $post = new Post();
        // $post->title= $request->title;
        // $post->body = $request->body;
        // $post->save();

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $post = Post::onlyTrashed()->get();
        return view('post.archive', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = Post::findorfail($id);
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $post = Post::findorfail($id);
        // $post->title=$request->title;
        // $post->body= $request->body;
        // $post->save();
        $post->update(
            $request->all()
        );
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Post::findorfail($id)->delete();
        Post::destroy($id);
        return redirect()->route('post.index');
    }

 // Softdelete function
    public function restore($id)
    {
        Post::withTrashed()->where('id', $id)->restore();
        return redirect()->back();
        Post::withTrashed()->where('id', $id)->forcedelete();
        return redirect()->back();
    }

   // forcedelete function
    public function forcedelete($id)
    {
       
        Post::withTrashed()->where('id', $id)->forcedelete();
        return redirect()->back();
    }
}
