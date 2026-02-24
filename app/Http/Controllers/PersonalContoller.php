<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalContoller extends Controller
{
    public function index()
    {
        return view('personal.index');
    }

    public function projects()
    {
        return view('personal.projects');
    }

    public function resume()
    {
        return view('personal.resume');
    }

    public function contact()
    {
        return view('personal.contact');
    }
}
