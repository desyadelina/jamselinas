<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananKami extends Controller
{
    public function index()
    {
        return view('pages.layanan-kami.index');
    }
}
