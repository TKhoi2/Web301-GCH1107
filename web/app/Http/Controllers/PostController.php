<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use App\Models\Follow;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function deletePost(Post $post) {
        if (auth()->user()->id === $post['user_id']) {
            $post->delete();
        }
        return redirect('/');
    }

    public function actuallyUpdatePost(Post $post, Request $request) {
        if (auth()->user()->id !== $post['user_id']) {
            return redirect('/');
        }

        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);

        $post->update($incomingFields);
        return redirect('/');
    }

    public function showEditScreen(Post $post) {
        if (auth()->user()->id !== $post['user_id']) {
            return redirect('/');
        }

        return view('edit-post', ['post' => $post]);
    }

    public function createPost(Request $request) {
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();
        Post::create($incomingFields);
        return redirect('/');
    }

    public function followPost(Post $post) {
        
        if(auth()->user()) {
            $followed = Follow::where('userId', auth()->user()->id)->where('postId', $post->id)->exists();
            if(!$followed) {
                Follow::create(['userId'=>auth()->user()->id, 'postId'=>$post->id]);
            } else {
                $followed = Follow::where('userId', auth()->user()->id)->where('postId', $post->id)->delete();
            }
        } 
        return redirect('/');
    }
    
    public function createComments(Post $post,Request $request){
        $incomingFields = $request->validate([
            'commentcontent' => 'required'
        ]);
        if(auth()->user()) {
            Comment::create(['userId'=>auth()->user()->id, 'postId'=>$post->id,'content'=> $incomingFields['commentcontent']]);
         }
         return  redirect()->back();
    }
    
    public function createLike(Post $post){
        if(auth()->user()) {
            $like = Like::where('userId', auth()->user()->id)->where('postId', $post->id)->exists();
            if(!$like) {
                Like::create(['userId'=>auth()->user()->id, 'postId'=>$post->id]);
            } else {
                $like = Like::where('userId', auth()->user()->id)->where('postId', $post->id)->delete();
            }
        } 
        
         return  redirect()->back();
    }
}
