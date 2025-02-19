<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/layouts/cart-item.css">
</head>
<body>
    <div class="container">
        <a href="{{ route('product-info') }}">
            <div id="image"></div>
        </a>
        <div class="info">
            <div id="name">ABCDEF</div>
            <div class="price">
                <div id="new-price">900.000</div>
                <div id="old-price">1.500.000</div>
            </div>
        </div>
        <div class="change-quantity">
            <div id="lower">-</div>
            <div id="quantity">0</div>
            <div id="upper">+</div>
        </div>
        <img src="images/trash-icon.svg" id ="remove" alt="Xoa san pham">
    </div>
</body>
</html>