<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Comment;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $info = [];
        $info['post_count'] = Post::count();
        $info['comment_count'] = Comment::count();
        $info['user_count'] = User::count();
        $info['category_count'] = Category::count();
        $info['tag_count'] = Tag::count();
        return view('admin.index', compact('info'));
    }

    public function posts()
    {
        $posts = Post::select(['id', 'title', 'slug', 'deleted_at', 'published_at', 'status'])->orderBy('created_at','desc')->paginate(20);
        dd($posts);
    }
}
