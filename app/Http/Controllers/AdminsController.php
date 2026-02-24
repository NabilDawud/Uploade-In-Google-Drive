<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function students(){
        return 'students admins';
    }

    public function teachers(){
        return 'teachers admins';
    }

    public function subjects(){
        return 'subjects admins';
    }

    public function levels(){
        return 'levels admins';
    }

    public function messages(){
        return 'messages admins';
    }
}
