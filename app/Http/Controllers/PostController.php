<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    // عرض جميع المنشورات
   
    // عرض صفحة إنشاء منشور جديد
    public function create()
    {
       return view('user.create'); // عرض نموذج إنشاء المنشور
    }

    // تخزين المنشور الجديد
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
           'profile_picture'   => 'image'|'mimes:jpeg,png,jpg,gif'|'max:2048', 
        ]);

        if($request->hasFile('profile_picture')){
            $imagePath = $request->file('profile_picture')->store('profile_picture', 'public');
        }

        Post::create([
            'content' => $request['content'],
            'profile_picture'   => $imagePath,
            'user_id' => Auth::user()->id,
            
        ]);

        


        return redirect()->back()->with('success', 'Post created successfully!'); // إعادة التوجيه إلى قائمة المنشورات
    }

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $posts = Post::all();
        $user = Auth::user();
        return view('user.index', compact('user' , 'posts')); // عرض الصفحة
    }


}
