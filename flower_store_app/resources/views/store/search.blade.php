@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/store/search.css') }}">
@section('content')
    <div class="products">
        @foreach ($products as $product)
            @include('layouts.product', [$product])
        @endforeach
    </div>
@endsection