@extends('layout')
@section ('content')

<link rel="stylesheet" href="css/login.css">
<div class="login-box">
    <h2>{{ __('LogIn') }}</h2>
    <form method="POST" id="loginForm" action="/login">
        @csrf
        <div class="user-box">
            <div>
                <input id="email" type="email" class="form-control pl-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" oninput="checkInput(this, 'emailLabelLoginForm');">
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <label id="emailLabelLoginForm" for="email">{{ __('Email Address') }}</label>
        </div>
        <div class="user-box">
            <div>
                <input id="password" type="password" class="form-control pl-5 @error('password') is-invalid @enderror" oninput="checkInput(this, 'passwordLabelLoginForm');">
                @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <label id="passwordLabelLoginForm" for="password">{{ __('Password') }}</label>
        </div>
        <a href="#" onclick="document.getElementById('loginForm').submit(); return false;">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
                {{ __('LogIn') }}
        </a>
    </form>
</div>
<script>
    function checkInput(input, labelId) {
        const label = document.getElementById(labelId);
        label.style.display = input.value ? 'none' : 'block';
    }
</script>
@endsection



