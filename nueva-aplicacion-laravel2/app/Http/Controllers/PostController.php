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


}
