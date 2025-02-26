<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{  asset('css/layouts/product.css') }}">
</head>
<body>
    <div class="container">
        <a href="{{ route('product-info' ,['productid' => $product->productid])}}">
            <div class="image">
                <img class="product_img" src="{{ asset("images/product_images/$product->image") }}" alt="">
            </div>
            <div class="info">
                <div class="name">{{$product->name}}</div>
                <div class="price">
                    <div class="price-new">{{$product->newprice}}</div>
                    <div class="price-old">{{$product->oldprice}}</div>
                </div>
            </div>
        </a>
        <div class="add-to-cart">
            <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="productid" value="{{ $product->productid }}">
                <input type="hidden" name="quantity" value="1">
                <button type="submit" class="button-add">+</button>
            </form>
        </div>
    </div>
</body>
</html>