@extends('layout')
@section('content')
<div class="container" style="margin-top:30px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-bg-dark">
                <div class="card-header">{{ __('Login Info') }}</div>
                <div class="card-body">
                    <form method="POST" action="/register_orphan">
                        @csrf
                        <!-- first name -->
                        <div class="row mb-3">
                            <label for="first_name" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                @error('first_name')
                                <p class="text-red-500 mt-1">{{$message}}</p>
                                 @enderror
                            </div>
                        </div>
                        <!-- last name  -->
                        <div class="row mb-3">
                            <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="last_name" class="form-control @error('email') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">
                                @error('last_name')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                            </div>
                        </div>
                        <!-- username  -->
                        <!-- <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('first_name') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                @error('username')
                                <p class="text-red-500 mt-1">{{$message}}</p>
                                 @enderror
                            </div>
                        </div> -->
                        <!-- email  -->
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                            </div>
                        </div>
                        <!-- password  -->
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                            </div>
                        </div>
                        <!-- confirm pass  -->
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                            </div>
                        </div>
                        <!-- personal info  -->
                        <div class="card-header border border-1 rounded-3">{{ __('Personal Info') }}</div>
                        <!-- Age  -->
                        <div class="row mb-3 mt-3 row">
                            <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('Age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control @error('email') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age">
                                @error('age')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                            </div>
                        </div>
                        <!-- address  -->
                        <!-- <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="address" class="form-control @error('email') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">
                                @error('address')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                            </div>
                        </div> -->
                        <!-- Education  -->
                        <!-- <div class="row mb-3">
                            <label for="Education" class="col-md-4 col-form-label text-md-end">{{ __('Education') }}</label>
                            <div class="col-md-6">
                            <select name="Education" id="Education">
                                <option value="Playground">Playground</option>
                                <option value="40000-50000">40000-50000</option>
                                <option value="50000-60000">50000-60000</option>
                                <option value="60000-70000">60000-70000</option>
                            </select>
                            </div>
                        </div>
                        marital status 
                        <div class="row mb-3">
                            <label for="marital_status" class="col-md-4 col-form-label text-md-end">{{ __('Marital Status') }}</label>
                                <div class="col-md-6">
                                <input type="radio" id="married" name = "marital_status" value="Married">
                                  <label for="html">Married</label><br>
                                <input type="radio" id="single" name = "marital_status" value="Single">
                                  <label for="html">Single</label><br>
                                <input type="radio" id="widow" name = "marital_status" value="Widowed">
                                  <label for="html">Widowed</label><br>
                            </div>
                        </div>
                        family size
                        <div class="row mb-3">
                            <label for="family_size" class="col-md-4 col-form-label text-md-end">{{ __('Family Size') }}</label>

                            <div class="col-md-6">
                                <input id="family_size" type="number" class="form-control @error('number') is-invalid @enderror" name="family_size" value="{{ old('family_size') }}" required autocomplete="family_size">
                                @error('family_size')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                            </div>
                        </div> -->
                        <!-- gender  -->
                        <div class="row mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
                                <!-- <input id="last_name" type="radio" class="form-control @error('email') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name"> -->
                                <div class="col-md-6">
                                <input type="radio" id="male" name = "gender" value="Male">
                                  <label for="html">Male</label><br>
                                <input type="radio" id="female" name = "gender" value="Female">
                                  <label for="html">Female</label><br>
                                
                            </div>
                        </div>
                        <!-- register button  -->
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection