<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    // public function index()
    // {
    //     return view('app/http/controllers/frontend/homecontroller.php');
    // }
     public function index()
    {
        $featuredPosts = Post::latest()->where('featured', true)->limit(3)->get();
        $recentPosts = Post::latest()->limit(5)->get();

        $posts = Post::latest()->limit(5)->get();
        $categories = Category::all();
        return view('frontend.home.index')->with([
            'featuredPosts' => $featuredPosts,
            'recentPosts'=> $recentPosts,
            'posts' => $posts,
            'categories' => $categories
        ]);
    }
}
