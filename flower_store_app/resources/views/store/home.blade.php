@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="css/store/home.css">
    <div class="banner">
        this is banner
    </div>
    <div class="text">San pham ban chay</div>
    <div class="products">
        @include('layouts.product')
        @include('layouts.product')
        @include('layouts.product')
        @include('layouts.product')
    </div>
    <div class="text">San pham moi</div>
    <div class="products">
        @include('layouts.product')
        @include('layouts.product')
        @include('layouts.product')
        @include('layouts.product')
    </div>
    <div class="button">Xem them</div>
@endsection