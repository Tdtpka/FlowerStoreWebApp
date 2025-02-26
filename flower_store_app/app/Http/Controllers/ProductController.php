<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use function Laravel\Prompts\alert;

class ProductController extends Controller
{
    //
    public function index($productid){
        $product = DB::table('products')->where('productid', $productid)->first();
        return view('layouts.product-info')->with('product', $product);
    }
}
