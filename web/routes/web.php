<?php

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommentController;

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
    
    if (auth()->check()) {
        $myposts = auth()->user()->usersCoolPosts()->latest()->get();

    }
     
    return view('index', ['Posts' => $posts, 'myposts' => $myposts] );
});

//register
Route::post('/register', [UserController::class, 'signup']);

//Login

Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

// Blog post related routes
Route::post('/create-post', [PostController::class, 'createPost']);
// Route::get('/edit-post/{post}', [PostController::class, 'showEditScreen']);
// Route::put('/edit-post/{post}', [PostController::class, 'actuallyUpdatePost']);
// Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);
Route::patch('/follow-post/{post}', [PostController::class, 'followPost']);
Route::post('/upcomments/{post}', [PostController::class, 'createComments']);
Route::get('/comment/{post}',function(Post $post){
    $comments = Comment::where('postId',$post->id)->get();
    return view('comment',['post'=>$post,'comments'=>$comments]);
});

//account
Route::get('/account', function () {
    return view('account');
});
Route::delete('/delete/{comment}',[CommentController::class, 'deleteComment'] );
Route::put('/editcomment/{comment}',[CommentController::class, 'editComment'] );
Route::get('/likepost/{post}',[PostController::class, 'createLike']);