<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HubungiKami extends Controller
{
    public function index()
    {
        return view('pages.hubungi-kami.index');
    }
}
