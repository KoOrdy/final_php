<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class PostController extends Controller
{
    public function create()
    {
       return view('user.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'image'   => ['image','mimes:jpeg,png,jpg,gif','max:2048'],
        ]);

        $data = [
            'content'=> $request['content'],
            'user_id' => Auth::user()->id,
        ];

        if($request->hasFile('image')){
            $image = $request->file('image');
            $data['image'] = $image->storeAs('/img', time() . '.' . $image->extension(), 'public');


        }

        Post::create($data);


        return redirect()->back()->with('success', 'Post created successfully!');
    }

    public function showEdit(){

        $posts=Post::all();
        return view('user.edit-profile',compact('post'));

    }

    public function index($id)
    {
        //$posts = Post::with('user')->latest()->get();
        $posts = Post::all();
        $user = User::with('posts')->findOrFail($id);

        return view('user.index', compact('user' , 'posts')); 
    }


}
