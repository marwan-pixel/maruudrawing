<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function about(): string
    {
        return view('about');
    }

    public function paintings(): string
    {
        return view('paintings');
    }

    public function contact(): string
    {
        return view('contact');
    }
}
