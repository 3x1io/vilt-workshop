<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    //return a welcome view
    public function index()
    {
        return view('welcome');
    }

    //return about view
    public function about()
    {
        return view('about');
    }
}
