<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        {
            $posts = Post::all();
           return view('blog', ['posts' => $posts]);
        }
    }
    public function show(Post $post)
{
    // $post = Post::find($post);
    return view('detail', ['post' => $post]);
}
public function create(){
    return view('blog.create');
}
public function store(Request $request) {
    //contiene la peticion que se ha enviado

    $request->validate([
        'title' => ['required', 'min:5'],
        'body' => ['required', 'min:10']
        ]);

    $post= new Post;
    $post->title = $request->input('title');
    $post->body =  $request->input(key: 'body');
    $post->save();
    session()->flash('status', 'Post created!');
    
    return to_route('blog.index');

}

public function edit(Post $post){
    return view('blog.edit', compact('post'));
}
public function update(Request $request, Post $post){

    $post->update([
        'title' => $request->title,
        'body' => $request->body,
    ]);

    return to_route(route: 'blog.index');
}


}
