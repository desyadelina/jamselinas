<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profile extends Controller
{
    public function index()
    {
        return view('pages.profile.index');
    }
    
    public function edit()
    {
        return view('pages.profile.edit');
    }
}
