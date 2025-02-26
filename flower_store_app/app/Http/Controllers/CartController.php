<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class CartController extends Controller
{
    //
    public function index(){
        $userid = Auth::id();
        if($userid){
            $cart = DB::table('carts')
            ->join('products', 'carts.productid', '=', 'products.productid')
            ->where('carts.userid', $userid)
            ->select('carts.*', 'products.name', 'products.newprice', 'products.image', 'products.oldprice')
            ->get();
            return view('store.cart', compact('cart'));
        }
        return view('store.cart');
    }
    public function addToCart(Request $request){
        $productid = $request->input('productid');
        $quantity = $request->input('quantity', 1);
        $userid = Auth::id();
        $cartItem = DB::table('carts')->where('productid', $productid)->where('userid', $userid)->first();
        if($cartItem){
            $quantity +=$cartItem->quantity;
            DB::table('carts')->where('productid', $productid)->where('userid', $userid)->update(['quantity' =>$quantity]);
        }else{
            DB::table('carts')->insert([
                'userid' => $userid,
                'productid'=> $productid,
                'quantity' =>$quantity,
                'created_at' =>now(),
                'updated_at' =>now(),
            ]);
        }
        return redirect()->route('cart');
    }
    public function removeFromCart($productid){
        $userid = Auth::id();
        DB::table('carts')->where('productid', $productid)->where('userid', $userid)->delete();
        return redirect()->route('cart');
    }

    public function updateCart(Request $request){
        $productid = $request->input('productid');
        $quantity = $request->input('quantity', 1);
        $userid = Auth::id();
        $cartItem = DB::table('carts')->where('productid', $productid)->where('userid', $userid)->first();
        if($cartItem){
            DB::table('carts')->where('productid', $productid)->where('userid', $userid)->update(['quantity' => $quantity]);
        }else{
        }
        return redirect()->route('cart');
    }
}
