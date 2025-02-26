@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/store/home.css">
    <div class="banner">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="swiper-slide">
                        <img src="{{ asset("images/slider/slide$i.png") }}" class="image">
                    </div>
                @endfor
            </div>
            <!-- Nút điều hướng -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <!-- Thêm Swiper.js -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
            });
        </script>
    </div>
    <div class="text">Sản phẩm bán chạy</div>
    <div class="products">
        @foreach ($products as $product)
            @include('layouts.product', ['product', $product])
        @endforeach
    </div>
    <div class="text">Sản phẩm mới</div>
    <div class="products">
        @foreach ($products as $product)
            @include('layouts.product', ['product', $product])
        @endforeach
    </div>
    <div class="more">
        <a class="more" href="{{ route('products') }}">Xem thêm</a>
    </div>
@endsection