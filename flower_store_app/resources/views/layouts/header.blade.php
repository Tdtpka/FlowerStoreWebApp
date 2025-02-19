<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/layouts/header.css">
</head>
<body>
    <div class="header">
        <div class="logo">
            <h1>Flower</h1>
        </div>
        <div>
            <ul class="menu">
                <li><a href="{{ route('home') }}" class="{{ set_active('home') }}">Home</a></li>
                <li><a href="{{ route('products')}}" class="{{ set_active('products')}}">San pham</a></li>
                <li><a href="{{ route('blog')}}" class="{{set_active('blog')}}">Blog</a></li>
                <li><a href="{{ route('aboutus')}}" class="{{set_active('aboutus')}}">About Us</a></li>
            </ul>
        </div>
        <div class="search">
            <input type="search" name="" id="search_box">
            <div id="search_icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 15 15">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg>
            </div>
        </div>
        <div>
            @if (Route::has('login'))
                            <div class="account">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="btn">
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="btn">
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="btn">
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </div>
                        @endif
        </div>
        <div id="cart">
            <a href="{{ route('cart')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                </svg>
            </a>
        </div>
    </div>
</body>
</html>