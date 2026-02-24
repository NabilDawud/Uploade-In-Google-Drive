<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::prefix('students')->name('students.')->group(function () {
    Route::get('/dashboard', [StudentsController::class, 'dashboard'])->name('dashboard');
    Route::get('/marks', [StudentsController::class, 'marks'])->name('marks');
    Route::get('/subjects', [StudentsController::class, 'subjects'])->name('subjects');
    Route::get('/exams', [StudentsController::class, 'exams'])->name('exams');
    Route::get('/messages', [StudentsController::class, 'messages'])->name('messages');
    Route::get('/avg', [StudentsController::class, 'avg'])->name('avg');
});