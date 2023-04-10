<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\kml_files;

class PostController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'Home',
            'kml_files' => kml_files::all()
        ]);
    }

    public function index()
    {
        return view('blog', [
            'title' => 'Blog',
            'posts' => Post::latest()->get()
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

    public function upload(Request $request)
    {
        $files = $request->file('file');

        foreach ($files as $file) {
            $name = $file->getClientOriginalName();
            $description = $request->input('description');
            $kml_data = file_get_contents($file);

            kml_files::table('kml_files')->insert([
                'name' => $name,
                'description' => $description,
                'kml_data' => $kml_data,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        return redirect()->back()->with('success', 'KML files uploaded successfully.');
    }
}
