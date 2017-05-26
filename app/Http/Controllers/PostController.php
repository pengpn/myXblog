<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    const PAGE_SIZE = 7;
    public function index()
    {
        $posts = Post::select(Post::selectArrayWithOutContent)->paginate(self::PAGE_SIZE);
        return view('post.index',compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show',compact('post'));
    }
}
