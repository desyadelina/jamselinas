<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventGuide extends Controller
{
     public function index()
    {
        return view('pages.event-guide.index');
    }
}
