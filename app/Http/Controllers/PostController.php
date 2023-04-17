<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Pemantauan;
use App\Models\User;

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

    public function table() {
        return view('table', [
            'title' => 'Tabel',
            'datas' => Pemantauan::all()
        ]);
    }

    public function category (Category $category) {
        return view('blog', [
            'title' => "Post by Category : $category->name",
            'posts' => $category->posts->load('user', 'category'),
        ]);
    }

    public function categories () {
        return view('categories', [
            'title' => 'Post Categories',
            'categories' => Category::all()
        ]);
    }

    public function user (User $user) {
        return view('blog', [
            'title' => "Post by Author : $user->name",
            'posts' => $user->posts->load('category', 'user')
        ]);
    }

    public function users () {
        return view('users', [
            'title' => 'People',
            'users' => User::all()
        ]);
    }
}
