<?php

namespace App\Http\Controllers;

use App\Models\Holiday;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $holidays = Holiday::all();
        return view('home', compact('holidays'));
    }
}
