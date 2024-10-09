<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function add()
    {
        User::factory(10)->create();
    }

    public function index()
    {
        $user = Auth::user();
        return view('user.index', compact('user'));
    }

    public function edit(int $id)
    {
        if (User::find($id)) {
            $user = Auth::user();
            return view('user.edit-profile', compact('user'));
        } else {
            abort(404);
        }

    }
    public function update(Request $request, int $id)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'unique:users,email,' . $id, 'max:255'],
            'birthdate' => ['required', 'date'],
            'gender' => ['required', 'string'],
            'phone_number' => ['required', 'unique:users,phone_number,' . $id, 'string'],
            'bio' => ['required', 'string'],
        ]);

        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'birthdate' => $request['birthdate'],
            'gender' => $request['gender'],
            'phone_number' => $request['phone_number'],
            'bio' => $request['bio'],
        ];

        if ($request->has('password')) {
            $data['password'] = bcrypt($request['password']);
        }

        $user = User::find($id);

        $user->update($data);

        return redirect()->back()->with('success', 'User Updated Successfully!');
    }

    public function deleteImage(int $id)
    {
        $user = User::find($id);
        if ($user) {
            Storage::disk('public')->delete($user->profile_picture);
            $user->update(['profile_picture' => null]);
        }
        return redirect()->back()->with('success', 'image Deleted Successfully!');
    }

    public function updateImage(Request $request, int $id)
    {

        $request->validate([
            'profile_picture' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);

        if ($request->hasFile('profile_picture')) {

            $image = $request->file('profile_picture');

            $data['profile_picture'] = $image->storeAs('/img', time() . '.' . $image->extension(), 'public');
        }

        $user = User::find($id);
        $user->update($data);
        return redirect()->back()->with('success', 'Image Updated Successfully!');

    }


    public function profile()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function jobs()
    {
        $user = Auth::user();
        return view('user.jobs', compact('user'));
    }

    public function application()
    {
        $user = Auth::user();
        return view('user.job-profile', compact('user'));

        //         // $user = Auth::user(); // Get the authenticated user

        // // Check if the user exists and compare the job ID
// $job = Jobs::where('id', $user->id)->all();

        // if ($job) {
//     // The user's ID matches the job ID
//     // Do something here, for example:
//     return 'Job found for user';
// } else {
//     // No matching job found
//     return 'No job found for this user';
// }


// $usersWithJobs = DB::table('users')
// ->join('jobs', 'users.id', '=', 'jobs.user_id')
// ->select('users.name', 'jobs.title')
// ->get();

// // You can return the data to a view or JSON response
// return view('users.index', ['usersWithJobs' => $usersWithJobs]);


    }

    public function myjobs()
    {
        $user = Auth::user();
        return view('user.myjobs', compact('user'));
    }


}

