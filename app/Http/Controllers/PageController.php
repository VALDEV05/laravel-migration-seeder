<?php

namespace App\Http\Controllers;

use App\Models\Holiday;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function holidays()
    {
        $holidays = Holiday::all();
        //ddd($holidays);
        return view('holidays.index', compact('holidays'));
    }
    public function contacts()
    {
        return view('contacts.index');
    }
}
