<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Pemantauan;
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
Route::get('/upload', [PostController::class, 'upload']);
Route::get('/table', [PostController::class, 'table']);
Route::get('/Category/{category:name}', [PostController::class, 'category']);
Route::get('/categories', [PostController::class, 'categories']);
Route::get('/User/{user:name}', [PostController::class, 'user']);
Route::get('/users', [PostController::class, 'users']);