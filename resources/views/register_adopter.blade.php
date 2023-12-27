@extends('layout')
@section('content')
<link rel="stylesheet" href="css/register.css">
<div class="login-box">
    <h2>{{ __('Login Info') }}</h2>
    <form method="POST" action="/register_adopter" id="registerAdopterForm">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <!-- first name -->
                    <div class="user-box">
                        <div>
                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus oninput="checkInput(this, 'firstNameLabelAdopterForm');">
                            @error('first_name')
                            <p class="text-red-500 mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <label id="firstNameLabelAdopterForm" for="first_name">{{ __('First Name') }}</label>
                    </div>
                    <!-- last name -->
                    <div class="user-box">
                        <div>
                            <input id="last_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus oninput="checkInput(this, 'lastNameLabelAdopterForm');">
                            @error('last_name')
                            <p class="text-red-500 mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <label id="lastNameLabelAdopterForm" for="last_name">{{ __('Last Name') }}</label>
                    </div>
                    <!-- user name -->
                    <div class="user-box">
                        <div>
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus oninput="checkInput(this, 'usernameLabelAdopterForm');">
                            @error('username')
                            <p class="text-red-500 mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <label id="usernameLabelAdopterForm" for="username">{{ __('Username') }}</label>
                    </div>
                    <!-- Email -->
                    <div class="user-box">
                        <div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" oninput="checkInput(this, 'emailLabelAdopterForm');">
                            @error('email')
                            <p class="text-red-500 mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <label id="emailLabelAdopterForm" for="email">{{ __('Email Address') }}</label>
                    </div>
                    <!-- Address -->
                    <div class="user-box">
                        <div>
                            <input id="address" type="address" class="form-control @error('email') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" oninput="checkInput(this, 'addressLabelAdopterForm');">
                            @error('address')
                            <p class="text-red-500 mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <label id="addressLabelAdopterForm" for="address">{{ __('Address') }}</label>
                    </div>
                    <!-- Password -->
                    <div class="user-box">
                        <div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" oninput="checkInput(this, 'passwordLabelAdopterForm');">
                            @error('password')
                            <p class="text-red-500 mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <label id="passwordLabelAdopterForm" for="password">{{ __('Password') }}</label>
                    </div>
                    <!-- Confirm Password -->
                    <div class="user-box">
                        <div>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" oninput="checkInput(this, 'passwordConfirmLabelAdopterForm');">
                            @error('password_confirmation')
                            <p class="text-red-500 mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <label id="passwordConfirmLabelAdopterForm" for="password-confirm">{{ __('Confirm Password') }}</label>
                    </div>

                </div>
                <div class="col-2 text-center" style="padding:0 3rem;">

                    <div style="border-left:1px solid white;height: 100%;margin-left:1rem"></div>
                </div>
                <div class="col-5">
                    <div class="text-light" style="margin-bottom:1rem;font-weight:bolder;font-size:x-large">{{ __('Personal Info') }}</div>

                    <!-- Occupation -->
                    <div class="user-box">
                        <div>
                            <input id="occupation" type="text" class="form-control @error('email') is-invalid @enderror" name="occupation" value="{{ old('occupation') }}" required autocomplete="occupation" oninput="checkInput(this, 'occupationLabelAdopterForm');">
                            @error('occupation')
                            <p class="text-red-500 mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <label id="occupationLabelAdopterForm" for="occupation">{{ __('Occupation') }}</label>
                    </div>
                    
                    <!-- Income -->
                    <div class="row">
                        <div class="col-6"><label id="" for="income" style="color: white;">{{ __('Income') }}</label></div>
                        <div class="col-6">
                            <select name="income" id="income" style="background:transparent; color:white;">
                                <option value="30000-40000" style="color: black;background:transparent;">30000-40000</option>
                                <option value="40000-50000" style="color: black;background:transparent;">40000-50000</option>
                                <option value="50000-60000" style="color: black; background:transparent;">50000-60000</option>
                                <option value="60000-70000" style="color: black;background:transparent;">60000-70000</option>
                            </select>
                        </div>
                        
                    </div>
                    <!-- Marital Status -->
                    <div class="user-box">
                        <div>
                            <div style="display: inline;">
                                <label for="html">Married</label><br>
                                <input type="radio" id="married" name="marital_status" value="Married">
                            </div>
                            <div style="display: inline;">
                                <label for="html">Single</label>
                                <input type="radio" id="single" name="marital_status" value="Single">
                            </div>
                            <div>
                                <label for="html">Widowed</label>
                                <input type="radio" id="widow" name="marital_status" value="Widowed">
                            </div>
                        </div>
                        <label id="" for="marital_status">{{ __('Marital Status') }}</label>
                    </div>
                    <!-- Family Size -->
                    <div class="user-box">
                        <div>
                            <input id="family_size" type="number" class="form-control @error('number') is-invalid @enderror" name="family_size" value="{{ old('family_size') }}" required autocomplete="family_size" oninput="checkInput(this, 'familysizeLabelAdopterForm');">
                            @error('family_size')
                            <p class="text-red-500 mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <label id="familysizeLabelAdopterForm" for="family_size">{{ __('Family Size') }}</label>
                    </div>
                    <!-- Gender -->
                    <div class="user-box">
                        <div>
                            <input type="radio" id="male" name="gender" value="Male">
                            <label for="html">Male</label><br>
                            <input type="radio" id="female" name="gender" value="Female">
                            <label for="html">Female</label><br>
                        </div>
                        <label id="genderLabelAdopterForm" for="gender">{{ __('Gender') }}</label>
                    </div>
                </div>
            </div>
        </div>




        <a href="#" onclick="document.getElementById('registerAdopterForm').submit(); return false;">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            {{ __('Register') }}
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