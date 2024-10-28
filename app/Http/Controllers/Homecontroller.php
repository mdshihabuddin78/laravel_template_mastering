<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function topminu()
    {
        return view('backend.topminu');
    }
    public function sideminu()
    {
        return view('backend.sideminu');
    }
}
