@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="css/layouts/form.css">
<div class="container">
    <div class="card-header">{{ __('Login') }}</div>
    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <label for="email" class="text">{{ __('Email Address') }}</label>

                <div class="input">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div>
                <label for="password" class="text">{{ __('Password') }}</label>

                <div class="input">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-check">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <div class="submit">
                <button type="submit" class="btn-submit">
                    {{ __('Login') }}
                </button>
                {{--@if (Route::has('password.request'))
                    <a class='forgot' href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif--}}
            </div>
        </form>
    </div>
</div>
@endsection
