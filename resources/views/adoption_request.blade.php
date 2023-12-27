@extends('layout')
@section ('content')
<div class="container" style="margin-top:7rem;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">{{ __('Enter Details') }}</div>

                <div class="card-body">
                    <form method="POST" action="/adoption_request">
                        @csrf

                        <div class="row mb-3">
                            <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('Enter age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="number" style="border:2px solid black" class="form-control border @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age">
                                @error('age')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" style="border:2px solid black" class="form-control border @error('description') is-invalid @enderror" name="description" required autocomplete="new-description">
                            @error('description')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="float:right;">
                                    {{ __('Submit') }}
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