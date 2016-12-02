<?php

namespace App\Controller;

class PagesController
{
    // Home
    public function home()
    {        
        return view('index');
    }

    // About Pages
    public function about()
    {
        return view('about');
    }

    // Contact Pages
    public function contact()
    {
        return view('contact');
    }
}