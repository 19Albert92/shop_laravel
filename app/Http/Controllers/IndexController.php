<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $product = Product::where('id', 5)->first();
dd($product);
       /* return view('home.index');*/
    }
}
