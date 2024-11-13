<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SandwichController;
use App\Models\Sandwich;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('no-connect');
});

Route::get('/sandwichs', [SandwichController::class, 'index'])->middleware(['auth', 'verified'])->name('front.sandwich.index');

Route::middleware('auth')->group(function () {


    Route::patch('/sandwichs', [SandwichController::class, 'update'])->name('sandwich.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
