<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class PpidController extends Controller
{
    public function index()

    {    

        $products = Product::where('tujuan_skpd', 'PPID')->paginate(10);

        // $products = Product::latest()->paginate(10);

    

        return view('admin.ppid',compact('products'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
}
