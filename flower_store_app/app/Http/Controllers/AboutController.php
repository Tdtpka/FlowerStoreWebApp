<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AboutController extends Controller
{
    //
    public function index(){
        $abouts = DB::table('abouts')->get();
        return view('store.aboutus')->with('abouts', $abouts);
    }
}
