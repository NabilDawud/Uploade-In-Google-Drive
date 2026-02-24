<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function students(){
        return 'students';
    }

    public function subjects(){
        return 'subjects teachers';
    }

    public function exams(){
        return 'exams teachers';
    }

    public function vacation(){
        return 'vacation teachers';
    }

    public function salary(){
        return 'salary teachers';
    }
}