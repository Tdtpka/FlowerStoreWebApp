<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/layouts/cart-item.css') }}">
    <script src="{{ asset("js/quantity.js") }}"></script>
    <script src="{{ asset("js/cart.js") }}"></script>
</head>

<body>
    <div class="container">
        <a href="{{ route('product-info', ['productid' => $cartItem->productid]) }}">
            <div class="image">
                <img class="product_img" src="{{ asset("images/product_images/$cartItem->image") }}" alt="">
            </div>
        </a>
        <div class="info">
            <div id="name">{{ $cartItem->name }}</div>
            <div class="price">
                <div class="new-price">{{ $cartItem->newprice }}</div>
                <div class="old-price">{{ $cartItem->oldprice }}</div>
            </div>
        </div>
        <div class="quantity">
            <form class="change-quantity" action="{{ route("cart.update") }}" method="POST">
                @csrf
                <button type="submit" class="minus" onclick="changeAndSaveQuantity(this, -1)">-</button>
                <input type="text" name="quantity" class="label_quantity" value="{{ $cartItem->quantity }}">
                <input type="hidden" name="productid" class="productid" value="{{ $cartItem->productid }}">
                <button type="submit" class="plus" onclick="changeAndSaveQuantity(this, 1)">+</button>
            </form>
        </div>
        <form action="/cart/remove/{{ $cartItem->productid }}" method="POST">
            @csrf
            <button type="submit" class="remove">
                <img src="images/trash-icon.svg" alt="Xoa san pham">
            </button>
        </form>
    </div>
</body>

</html>