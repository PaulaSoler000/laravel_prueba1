<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('home.index');
    }
    public function about()
    {
        return view('home.about');
    }

    public function sayMyName($name)
    {
        return view('home.say-my-name', compact('name'));
    }

    public function suma($numero1, $numero2){

        $suma=$numero1+$numero2;
        
        return view('home.suma', compact('suma'));

    }

    public function resta($numero1, $numero2){

        $resta=$numero1-$numero2;
        
        return view('home.resta', compact('resta'));

    }


}
