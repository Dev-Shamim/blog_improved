<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy("created_at","desc")->paginate(9);
        return view('frontend.post.index')->with([
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StorePostRequest $request)
    // {
    //     $post = Post::create($request->all());
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $slug )
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $relatedPost = Post::where(function ($query) use ($post) {
            $query->where('category_id', $post->category_id)
                  ->orWhere('user_id', $post->user_id);
        })
        ->where('id', '!=', $post->id)
        ->inRandomOrder()
        ->limit(4)   
        ->get();
        // dd($relatedPost);

        $posts = Post::latest()->limit(5)->get();
        $categories = Category::all();
        return view('frontend.post.show')->with([
            'post' => $post,
            'relatedPost'=> $relatedPost,
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdatePostRequest $request, Post $post)
    // {
    //     $post->update($request->all());
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
