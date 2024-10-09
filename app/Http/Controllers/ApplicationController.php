<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            // 'jobs_id' => ['required','exists:jobs,id'],
            // 'user_id' => ['required','exists:users,id'],
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255'],
            'phone_number' => ['required','string','max:15'],
        ]);

        $data =[
            'jobs_id' => $request->jobs_id,
            'user_id' => Auth::id(),
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ];

        Application::create($data);

        return redirect()->back()->with('success', 'Your application has been submitted!');    }

}