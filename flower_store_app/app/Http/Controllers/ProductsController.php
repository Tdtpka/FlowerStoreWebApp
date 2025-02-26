<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        $products = DB::table('products')->select('name', 'productid', 'image', 'newprice', 'oldprice')->get();
        return view('store.products')->with('products', $products);
    }
    public function sort(Request $request)
    {
        $sort = $request->input('sort_price', 'asc'); // Mặc định là 'asc'

        $products = DB::select("SELECT * FROM products ORDER BY newprice $sort");

        return view('store.sort', compact('products'));
    }


    public function search(Request $request)
    {
        $keyword = $request->query('keyword');
        $products = DB::select("SELECT * FROM products WHERE name LIKE ?", ["%$keyword%"]);
        return view('store.search')->with('products', $products);
    }
}
