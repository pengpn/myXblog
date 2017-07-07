<?php

namespace App\Http\Controllers;

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

        return view('tag.show',compact('posts','name'));
    }
}
