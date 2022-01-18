<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function holidays()
    {
        return view('holidays.index');
    }
    public function contacts()
    {
        return view('contacts.index');
    }
}
