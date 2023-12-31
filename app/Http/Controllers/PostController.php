<?php

namespace App\Http\Controllers;

use App\Models\Image;
use TCG\Voyager\Models\Post;

// use TCG\Voyager\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();

        // $posts = Post::with('category')->get();
        $posts = Post::with('category')->latest()->take(3)->get();
        $images = Image::latest()->take(4)->get();

        return view('welcome', compact('posts', 'images'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function showImage(Image $image)
    {
        return view('images.show', compact('image'));
    }

    public function jsonPosts()
    {
        $posts = Post::with('category')->latest()->take(3)->get();
        return response()->json($posts);
    }

}
