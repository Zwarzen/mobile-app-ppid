<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DynamicDependent extends Controller
{
    function index()
    {
     $staff_list = DB::table('penandatangan')
         ->groupBy('nama_staff_ttd')
         ->get();
     return view('admin.index')->with('nama_staff_ttd', $staff_list);
    }
}
