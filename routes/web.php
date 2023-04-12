<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'home']);
Route::get('/about', [PostController::class, 'about']);
Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{post:slug}', [PostController::class, 'show']);

Route::get('/Category/{category:name}', function (Category $category) {
    return view('blog', [
        'title' => "Post by Category : $category->name",
        'posts' => $category->posts->load('user', 'category'),
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/User/{user:name}', function (User $user) {
    return view('blog', [
        'title' => "Post by Author : $user->name",
        'posts' => $user->posts->load('category', 'user')
    ]);
});

Route::get('/users', function () {
    return view('users', [
        'title' => 'People',
        'users' => User::all()
    ]);
});

Route::get('/table', function (Post $posts) {
    return view('table', [
        'title' => 'Tabel',
        'users' => User::all(),
        'categories' => Category::all()
    ]);
});
