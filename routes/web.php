<?php

use App\Http\Controllers\FormCourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonalContoller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('users', [HomeController::class, 'users'])->name('users');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');

Route::prefix('personal')->name('personal.')->group(function () {
    Route::get('', [PersonalContoller::class, 'index'])->name('index');
    Route::get('projects', [PersonalContoller::class, 'projects'])->name('projects');
    Route::get('resume', [PersonalContoller::class, 'resume'])->name('resume');
    Route::get('contact', [PersonalContoller::class, 'contact'])->name('contact');
});


Route::get('formcourse', [FormCourseController::class, 'form1'])->name('form.form1');
Route::post('formcourse', [FormCourseController::class, 'form1Post']);

Route::get('form2', [FormCourseController::class, 'form2'])->name('form.form2');
Route::post('form2', [FormCourseController::class, 'form2Post']);

