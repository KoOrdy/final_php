<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
{
    $request->validate([
        'content' => 'required|string',
    ]);

    // Create the comment
    $comment = Comment::create([
        'post_id' => $postId,
        'user_id' => Auth::user()->id,
        'content' => $request->input('content'),
    ]);

    // Retrieve the user's name and formatted timestamp
    $userName = Auth::user()->name;
    $createdAt = $comment->created_at->diffForHumans(); // or use format() for a specific date format

    // Return a JSON response
    return response()->json([
        'success' => true,
        'user' => $userName,
        'comment' => [
            'content' => $comment->content,
            'created_at' => $createdAt
        ]
    ]);
}



}
