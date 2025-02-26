@extends('layouts.app')
<link rel="stylesheet" href="css/store/checkout-info.css">
@section('content')
    <div class="main">
        <form action="" method="POST">
            <div class="row">
                <label for="name">Họ và tên</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="row"><label for="phone">Số điện thoại</label>
                <input type="text" name="phone" id="phone">
            </div>
            <div class="row"><label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="row"><label for="address">Địa chỉ</label>
                <input type="text" name="address" id="address">
            </div>
            <div class="row">
                <button type="submit">Đặt hàng</button>
            </div>
        </form>
    </div>
@endsection