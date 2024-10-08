<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


});

require __DIR__.'/auth.php';
