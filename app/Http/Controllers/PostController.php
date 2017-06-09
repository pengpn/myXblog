<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    const PAGE_SIZE = 7;
    public function index()
    {
        $posts = Post::select(Post::selectArrayWithOutContent)->with(['category','tags'])->withCount('comments')->orderBy('created_at','desc')->paginate(self::PAGE_SIZE);
        $categories = Category::withCount('posts')->get();
        $tags = Tag::withCount('posts')->get();

        return view('post.index',compact('posts','categories','tags'));
    }

    public function show($id)
    {
        $post = Post::with('category','tags')->withCount('comments')->findOrFail($id);
        $recommendedPosts = Post::where('category_id',$post->category->id)
                            ->where('id','<>',$post->id)
                            ->orderBy('view_count','desc')
                            ->select(Post::selectArrayWithOutContent)
                            ->limit(5)
                            ->get();
        $comments = $post->comments;
        return view('post.show',compact('post','recommendedPosts','comments'));
    }
}
