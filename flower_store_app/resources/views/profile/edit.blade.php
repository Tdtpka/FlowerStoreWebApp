@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/profile/profile.css') }}">
@section('content')
    <div class="profile">
        <div class="title">Tài khoản</div>
        <div class="row">
            <div class="label">Ten tai khoan:
                {{ Auth::user()->name }}
            </div>
        </div>
        <div class="row">
            <div class="label">Email:
                {{ Auth::user()->email }}
            </div>
        </div>
        <div class="row">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout')}}" onclick="event.preventDefault();
                                        this.closest('form').submit();" class="logout-btn">
                    Đăng xuất
                </a>
            </form>
        </div>
    </div>
    <h2 class="title">Chỉnh sửa tài khoản</h2>
    <div class="main">
        <div class="form">
            @include('profile.partials.update-profile-information-form')
        </div>
        <div class="form">
            @include('profile.partials.update-password-form')
        </div>
        <div class="form">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
@endsection