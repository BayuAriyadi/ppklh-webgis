<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PostController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'Home',
        ]);
    }

    public function index()
    {

        return view('blog', [
            'title' => 'All Posts',
            'posts' => Post::latest()->filter()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => $post->title,
            'post' => $post
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About',
            'name' => 'Muhammad Bayu Ariyadi',
            'email' => 'bayuariyadi9@gmail.com',
            'image' => 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png'
        ]);
    }
    
    public function upload() {
        return view('upload', [
            'title' => 'Upload',
        ]);
    }
}
