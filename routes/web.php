<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/users', function () {
    return view('/users');
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {

    Route::get('users/add', [UserController::class, 'add'])->name('users.add');
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/edit-profile/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::put('users/update-profile/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('users/delete-image/{id}', [UserController::class, 'deleteImage'])->name('users.deleteImage');
    Route::put('users/update-image/{id}', [UserController::class, 'updateImage'])->name('users.updateImage');
    Route::put('users/update-image/{id}', [UserController::class, 'updateImage'])->name('users.updateImage');


    Route::get('users/edit-profile', [UserController::class, 'edit'])->name('users.edit');
    Route::get('users/profile', [UserController::class, 'profile'])->name('users.profile');
    

    Route::post('users/application', [ApplicationController::class, 'store'])->name('application.store');
    Route::get('users/application/{job_id}', [JobController::class, 'apply'])->name('application');


    Route::post('/users/myjobs/store', [JobController::class, 'store'])->name('myjobs.store');
    Route::get('/users/myjobs', [ApplicationController::class, 'index'])->name('myjobs');


    Route::get('users/jobs', [JobController::class, 'jobsIndex'])->name('jobs');
});

require __DIR__.'/auth.php';
