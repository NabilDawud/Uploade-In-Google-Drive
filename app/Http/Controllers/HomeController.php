<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home()
    {
        return view('home');
    }

    function users()
    {
        $users = [
                [
                    'id' => 1,
                    'name' => 'nabil',
                    'age' => 21
                ],
                [
                    'id' => 2,
                    'name' => 'husam',
                    'age' => 50
                ],
                [
                    'id' => 3,
                    'name' => 'dawud',
                    'age' => 44
                ],
                [
                    'id' => 4,
                    'name' => 'ahmed',
                    'age' => 10
                ],
                [
                    'id' => 5,
                    'name' => 'mohammed',
                    'age' => 30
                ]


        ];

        return view('users', compact('users'));
    }
    function contact()
    {
        return view('contact');
    }
}
