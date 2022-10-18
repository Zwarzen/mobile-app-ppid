<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Keberatan extends Controller
{
    public function index()

    {    

        return view('pdf.keberatan');

    }
}
