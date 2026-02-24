<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
public function dashboard(){
    return 'dashboard';
}    

public function marks(){
    return 'marks students';
}

public function subjects(){
    return 'subjects students';
}

public function exams(){
    return 'exams students';
}

public function messages(){
    return 'messages students';
}

public function avg(){
    return 'avg students';
}


}
