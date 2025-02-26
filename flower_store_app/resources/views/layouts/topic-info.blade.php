@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/layouts/topic-info.css') }}">
<div class="container">
        <div class="image-wrapper">
            <img id="image" src="{{ asset("images/others/$image") }}" alt="">
        </div>
        <div class="info">
            <div id="title">{{ $title }}</div>
            <div id="text">{{ $content }}</div>
        </div>
    </div>
@endsection