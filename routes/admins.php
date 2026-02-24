<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;

Route::prefix('admins')->name('admins.')->group(function () {
    Route::get('/students', [AdminsController::class, 'students'])->name('students');
    Route::get('/teachers', [AdminsController::class, 'teachers'])->name('teachers');
    Route::get('/subjects', [AdminsController::class, 'subjects'])->name('subjects');
    Route::get('/levels', [AdminsController::class, 'levels'])->name('levels');
    Route::get('/messages', [AdminsController::class, 'messages'])->name('messages');
});
