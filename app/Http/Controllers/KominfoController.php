<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KominfoController extends Controller
{
    public function index()

    {    

        return view('admin.kominfo');

    }
    
}
