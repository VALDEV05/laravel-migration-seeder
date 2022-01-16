<?php

namespace App\Http\Controllers;

use App\Models\Holiday;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $holiday = Holiday::all();
        ddd($holiday);
        return view('home');
    }
}
