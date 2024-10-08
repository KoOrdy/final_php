<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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


    Route::get('users/edit-profile', [UserController::class, 'edit'])->name('users.edit');
    Route::get('users/profile', [UserController::class, 'profile'])->name('users.profile');
    
    Route::get('users/application', [UserController::class, 'application'])->name('users.application');


    Route::post('/users/myjobs/store', [JobController::class, 'store'])->name('myjobs.store');
    Route::get('/users/myjobs', [UserController::class, 'myjobs'])->name('myjobs');
    Route::get('users/jobs', [UserController::class, 'jobs'])->name('jobs');
});

require __DIR__.'/auth.php';
