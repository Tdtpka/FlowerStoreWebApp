@extends('layouts.app')
@section('content')
    <div class="content_wrapper">
        <link rel="stylesheet" href="css/store/products.css">
        <form action="{{ route('products.sort') }}" method="GET" class="sort">
            <select name="sort_price" onchange="this.form.submit()">
                <option value="">Sắp xếp theo giá</option>
                <option value="asc" {{ request('sort_price') == 'asc' ? 'selected' : '' }}>Giá thấp đến cao</option>
                <option value="desc" {{ request('sort_price') == 'desc' ? 'selected' : '' }}>Giá cao đến thấp</option>
            </select>
        </form>
        <div class="products">
            @foreach ($products as $product)
                @include('layouts.product', [$product])
            @endforeach
        </div>
    </div>
@endsection