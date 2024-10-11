<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
{
    // Validate the request
    $request->validate([
        'content' => 'required|string',
    ]);

    // Create the comment
    $comment = Comment::create([
        'post_id' => $postId,
        'user_id' => Auth::user()->id,
        'content' => $request->input('content'),
    ]);

    // Return JSON response for AJAX
    return response()->json([
        'success' => true,
        'message' => 'Comment added successfully!',
        'comment' => $comment,
        'user' => Auth::user()->name, // Return the user name
    ]);
}

}
