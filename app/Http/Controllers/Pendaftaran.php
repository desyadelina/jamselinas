<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pendaftaran extends Controller
{
    public function index()
    {
        return view('pages.auth.pendaftaran');
    }
}
