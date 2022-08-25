<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PrintView extends Controller
{
    public function index()
      {
            $products = Product::all();
            return view('printview')->with('products', $products);;
      }
      public function prnpriview()
      {
            $products = Product::all();
            return view('products')->with('products', $products);;
      }
}
