<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //GET 
    public function index()
    {
        return view('home');
    }
}
