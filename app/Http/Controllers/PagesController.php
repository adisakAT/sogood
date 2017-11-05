<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function welcome(){
        $text = ' ADISAK THIMTHONG';
        $friends =[
            'Anna',
            'Miki'
        ];

        return view('welcome' , compact('text','friends'));
    }

    function about(){
        return view('about');
    }
    function test(){
        return view('test');
    }
}
