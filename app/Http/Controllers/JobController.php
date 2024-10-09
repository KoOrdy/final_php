<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class JobController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'job_title' => ['required','string','max:255'],
            'company' => ['required','string','max:255'],
            'location' => ['required','string','max:255'],
            'description' => ['required','string'],
        ]);

        $data =[
            'job_title' => $request['job_title'],
            'company' => $request['company'],
            'location' => $request['location'],
            'description' => $request['description'],
            'user_id' => Auth::user()->id,
        ];

        // $data['user_id']=auth()->user()->id;

        // dd($data);

        Job::create($data);

        return redirect()->back()->with('success','Job is created');
    }

    public function index()
    {
        $user = Auth::user();
        return view('user.myjobs', compact('user'));
    }
}
