<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// users controllor
Route::middleware('auth', 'verified')->group(function () {
    // dashboard
    Route::get('/dashboard', [userController::class, 'view'])->name('dashboard');


    // deposit
    Route::get('/dashboard/deposit', [userController::class, 'deposit'])->name('deposit');

    // deposit history
    Route::get('/dashboard/deposithistory', [userController::class, 'deposithistory'])->name('deposithis');

    // withdrawal
    Route::get('/dashboard/withdrawal', [userController::class, 'withdrawal'])->name('withdraw');

    // withdrawal history
    Route::get('/dashboard/withdrawalhistory', [userController::class, 'withdrawalhistory'])->name('withdrawhis');

    // invest
    Route::get('/dashboard/invest', [userController::class, 'invest'])->name('invest');

    // invest history
    Route::get('/dashboard/investhistory', [userController::class, 'investhistory'])->name('investhis');

});

require __DIR__ . '/auth.php';
