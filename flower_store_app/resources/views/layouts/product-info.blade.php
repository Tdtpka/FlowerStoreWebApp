@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{  asset('css/layouts/product-info.css')}}">
<script src="{{ asset('js/quantity.js') }}"></script>
<div class="container">
    <div class="main">
        <div class="image">
            <img class="product_img" src="{{asset("images/product_images/$product->image")}}" alt="">
        </div>
        <div class="info">
            <div class="name">{{$product->name}}</div>
            <div class="price">
                <div class="new-price">{{$product->newprice}}</div>
                <div class="old-price">{{$product->oldprice}}</div>
            </div>
            <div class="change-quantity">
                <button onclick="changeQuantity(this, -1)" id="minus">-</button>
                <input type="text" class="label_quantity" value="1" min="1">
                <button onclick="changeQuantity(this, 1)" id="plus">+</button>
            </div>
            <div class="add-to-cart">
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="productid" value="{{ $product->productid }}">
                    <input type="hidden" name="quantity" id='quantity' value="1">
                    <button type="submit" class="btn-add">THÊM VÀO GIỎ</button>
                </form>
            </div>
            <div class="promotion">Tang thiep tri gia 20.000d khi dat tu 2 bo<br>Tang thiep tri gia 20.000d khi dat tu 2 bo<br>Tang thiep tri gia 20.000d khi dat tu 2 bo</div>
        </div>
    </div>
    <div class="description">
        <div class="content">MO TA</div>
        <div class="text">{{$product->description}}</div>
    </div>
</div>
@endsection