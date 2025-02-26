<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class BlogController extends Controller
{
    //
    public function index(){
        $blogs = DB::table('blogs')->get();
        return view('store.blog')->with('blogs', $blogs);
    }
}
