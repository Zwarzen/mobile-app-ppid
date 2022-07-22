<?php

namespace App\Http\Controllers;

use App\Models\Instrumen;
use Illuminate\Http\Request;

class InstrumenController extends Controller
{
    public function index()

    {    

        return view('profil.instrumen');

    }
}
