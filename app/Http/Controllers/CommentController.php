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

        Comment::create([
            'post_id' => $postId,
            'user_id' => Auth::user()->id,
            'content' => $request->input('content'),
        ]);

        return back()->with('success', 'Comment added successfully!');
    }
}
