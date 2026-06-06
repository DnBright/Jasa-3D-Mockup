<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BriefController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/briefs', [BriefController::class, 'store'])->name('briefs.store');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [BriefController::class, 'dashboard'])->name('dashboard');
    Route::patch('/dashboard/briefs/{brief}', [BriefController::class, 'updateStatus'])->name('briefs.update-status');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
