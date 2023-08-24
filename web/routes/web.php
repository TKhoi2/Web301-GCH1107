<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    $posts = Post::orderBy('created_at', 'desc')->get();
    $myposts = []; 
    $followPosts = [];
    if (auth()->check()) {
        $myposts = auth()->user()->usersCoolPosts()->latest()->get();
        $followPosts = auth()->user()->Followed;
    }
     
    return view('login', ['posts' => $posts,'myposts' => $myposts, 'Follows' => $followPosts]);
});


Route::get('/signup', function () {
    return view('signup');
});
//register
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('signup');
Route::post('/signup', [UserController::class, 'signup']);
Route::post('/logout', [UserController::class, 'logout']);
//Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);
// Blog post related routes
Route::post('/create-post', [PostController::class, 'createPost']);
Route::get('/edit-post/{post}', [PostController::class, 'showEditScreen']);
Route::put('/edit-post/{post}', [PostController::class, 'actuallyUpdatePost']);
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);
Route::patch('/follow-post/{post}', [PostController::class, 'followPost']);