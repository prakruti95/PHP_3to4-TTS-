<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
            $name = "Student";
            return view('home', compact('name'));
    }
    public function about()
    {
            $course = "PHP";
            return view('about', compact('course'));
    }
}
