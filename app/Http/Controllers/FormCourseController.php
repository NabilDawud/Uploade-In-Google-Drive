<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormCourseRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormCourseController extends Controller
{
    function form1()
    {
        $instructors = [1 => 'ahmed', 2 => 'mohammed', 3 => 'sayed', 4 => 'hassan', 5 => 'ali'];
        return view('form.form1', compact('instructors'));
    }

    function form1Post(FormCourseRequest $request)
    {
        dd($request->validated());
    }

    function form2()
    {
        return view('form.form2');
    }

    function form2Post(Request $request)
    {
        //   $path=  $request->file('images')->store('uploads', 'custom');
        //     $paths=[];
        //   $images=  $request->file('images');
        //     foreach($images as $image){
        //         $paths[]=  $image->store('uploads', 'custom');
        //     }

        try {

            // Storage::disk('google')->put('test.txt', 'Hello Google Drive! This is a test from Laravel.');
            // Storage::disk('google')->put(
            //     'laravel12/test.txt',
            //     'Hello Google Drive!'
            // );

            $image = $request->file('image');
            $google = $image->store('laravel12', 'google');
            return "تم رفع الصورة بنجاح! الملف موجود في: " . $google;
        } catch (\Exception $e) {
            return 'فشل الرفع: ' . $e->getMessage();
        }

        // return view('form.show_form2', compact('paths'));
    }
}
