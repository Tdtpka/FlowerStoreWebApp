<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicController extends Controller
{
    //
    public function index(Request $request){
        $image = $request->input('image');
        $title = $request->input('title');
        $content = $request->input('content');
        $text = array('title', 'content');
        return view('layouts.topic-info', compact('image', $text));
    }
}
