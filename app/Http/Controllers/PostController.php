<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post)
    {
//        Example of we could do it:
//        $post = Post::findOrFail($id);
        return view('blog-post', ['post' => $post]);
    }
}
