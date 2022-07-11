<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EntryController;

Route::get('entries',[EntryController::class, 'index'])->middleware(['auth'])->name('entries.index');
Route::post('entries', [EntryController::class, 'store'])->middleware(['auth'])->name('entries.store');

require __DIR__.'/auth.php';
