<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    const PAGE_SIZE = 7;
    public function index()
    {
        $posts = Post::select(Post::selectArrayWithOutContent)->paginate(self::PAGE_SIZE);
        $categories = Category::withCount('posts')->get();
        $tags = Tag::withCount('posts')->get();
        return view('post.index',compact('posts','categories','tags'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show',compact('post'));
    }
}
