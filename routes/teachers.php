<?php

use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;

Route::prefix('teachers')->name('teachers.')->group(function () {
    Route::get('/students', [TeachersController::class, 'students'])->name('students');
    Route::get('/subjects', [TeachersController::class, 'subjects'])->name('subjects');
    Route::get('/exams', [TeachersController::class, 'exams'])->name('exams');
    Route::get('/vacation', [TeachersController::class, 'vacation'])->name('vacation');
    Route::get('/salary', [TeachersController::class, 'salary'])->name('salary');
});
