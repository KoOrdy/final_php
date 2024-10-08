<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add(){
        User::factory(10)->create();
    }

    public function index(){
        $user = Auth::user();
        return view('user.index',compact('user'));
    }

    public function edit(int $id){
            if(User::find($id)){
                $user = Auth::user();
                return view('user.edit-profile', compact('user'));
            }
            else{
                abort(404);
            }

        }
        public function update(Request $request, int $id){

            echo 'done';
        }
    
    
   

    public function profile(){
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function jobs(){
        $user = Auth::user();
        return view('user.jobs', compact('user'));
    }

    public function application(){
        $user = Auth::user();
        return view('user.job-profile', compact('user'));
    }

    public function myjobs(){
        $user = Auth::user();
        return view('user.myjobs', compact('user'));
    }
}

