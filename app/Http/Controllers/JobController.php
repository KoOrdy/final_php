<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Job::create([
            'job_title' => $request->job_title,
            'company' => $request->company,
            'location' => $request->location,
            'description' => $request->description,
        ]);

        return redirect()->route('jobs.index')->with('success', 'Job created successfully.');
    }
}
