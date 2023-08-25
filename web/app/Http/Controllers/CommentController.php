<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function deleteComment(Comment $comment) {
            if (auth()->user()->id === $comment['userId']) {
                $comment->delete();
            }
            return redirect()->back();
        }

    public function editComment(Request $request, Comment $comment) {
        $incomingFields = $request->validate([
            'edited_comment' => 'required'
        ]);
        if ($comment->userId == auth()->user()->id) {
            $comment->content = $incomingFields->input('edited_comment');
            $comment->save();
        }
    
        return redirect()->back();
    }
}