@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="css/store/cart.css">
    <script src="js/quantity.js"></script>
    <script>
        window.onload = function(){
            getCheckoutInfo();
        };
    </script>
    <h2 class="label_cart">Giỏ hàng</h2>
    <div class="content" >
        <div class="items">
            @if ($cart)
                @foreach ($cart as $cartItem)
                    @include('layouts.cart-item', compact('cartItem'))
                @endforeach
            @endif
        </div>
        <div class="checkout-info">
            <div class="row">
                <span>Tạm tính</span>
                <strong id="sub-total"></strong>
            </div>
            <div class="row">
                <span>Phụ phí</span>
                <strong id="sub-fee"></strong>
            </div>
            <div class="row">
                <span>Giảm giá</span>
                <strong id="discount"></strong>
            </div>
            <div class="row">
                <span>Hóa đơn VAT</span>
                <strong id="vat"></strong>
            </div>
            <hr>
            <div class="row">
                <span>Tổng cộng</span>
                <strong id="total"></strong>
            </div>
            <div id="checkout-btn">
                <a href="{{ route('checkout') }}">Đặt hàng</a>
            </div>
        </div>
    </div>
@endsection