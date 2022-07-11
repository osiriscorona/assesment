<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EntryController;

Route::get('entries',[EntryController::class, 'index'])->name('entries.index');
Route::post('entries', [EntryController::class, 'store'])->name('entries.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
