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
       return view('user.create');
    }

//    public

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
//        Post::create([
//            //'content' => $request->input('content'),
//            'content' => $request['content'],
//            //'image'   => $imagePath,
//            'user_id' => Auth::user()->id,
//        ]);

        return redirect()->back()->with('success', 'Post created successfully!'); // إعادة التوجيه إلى قائمة المنشورات
    }

    public function index()
    {
        //$posts = Post::with('user')->latest()->get();
        $posts = Post::all(); // استرجاع جميع المنشورات
        $user = Auth::user();
        return view('user.index', compact('user' , 'posts')); // عرض الصفحة
    }


}
