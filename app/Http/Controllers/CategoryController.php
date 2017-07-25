<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    const PAGE_SIZE = 7;

    public function index()
    {
        return view('category.index');
    }

    public function show($categoryName)
    {
        $category = Category::where('name',$categoryName)->first();
        $posts = $category->posts()->select(Post::selectArrayWithOutContent)->with('tags','category')->withCount('comments')->orderBy('created_at','desc')->paginate(self::PAGE_SIZE);
        $tags = Tag::withCount('posts')->get();
        $categories = Category::withCount('posts')->get();
        return view('category.show',compact('posts','categoryName','tags','categories'));
    }
}
