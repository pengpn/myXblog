<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    const PAGE_SIZE = 7;

    public function index()
    {
        return view('tag.index');
    }

    public function show($name)
    {
        $tag = Tag::where('name',$name)->first();
        $posts = $tag->posts()->select(Post::selectArrayWithOutContent)->with('tags','category')->withCount('comments')->orderBy('created_at','desc')->paginate(self::PAGE_SIZE);
        $categories = Category::withCount('posts')->get();
        $tags = Tag::withCount('posts')->get();
        return view('tag.show',compact('posts','name','categories','tags'));
    }
}
