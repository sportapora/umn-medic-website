<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('about.index');
    }

    public function proker()
    {
        return view('proker.index');
    }

    public function gallery()
    {
        return view('gallery.index');
    }

    public function contactUs()
    {
        return view('contactUs.index');
    }
}
