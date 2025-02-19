@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="css/store/cart.css">
    <h2>Gio hang</h2>
    <div class="content">
        <div class="items">
            @include('layouts.cart-item')
            @include('layouts.cart-item')
            @include('layouts.cart-item')
            @include('layouts.cart-item')
            @include('layouts.cart-item')
        </div>
        <div class="checkout-info">
            <div class="row">
                <span>Tam tinh</span>
                <strong id="sub-total">50.000d</strong>
            </div>
            <div class="row">
                <span>Phu phi</span>
                <strong id="sub-fee">50.000d</strong>
            </div>
            <div class="row">
                <span>Giam gia</span>
                <strong id="discount">50.000d</strong>
            </div>
            <div class="row">
                <span>Hoa don VAT</span>
                <strong id="vat">50.000d</strong>
            </div>
            <hr>
            <div class="row">
                <span>Tong cong</span>
                <strong id="total">50.000d</strong>
            </div>
            <div id="checkout-btn">Thanh toan</div>
        </div>
    </div>
@endsection