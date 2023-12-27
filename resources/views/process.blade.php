@extends('layout')
@section('content')
    <h1>{{$user->user->User_access->first_name}}'s request</h1>
    <div>{{$user->description}}</div>
    <!-- $user->id -->
    <form method="POST" action="/application_processed" >
        @csrf
        <label for="reply">Write a reply:</label>
        <input type="text" name="reply" id="reply" placeholder="write your reply here">
        @error('reply')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
        <button type="submit" class="btn btn-primary">{{ __('OK') }}</button>
        <div hidden>
            <input type="text" name="user_id" value="{{$user->id}}">
        </div>
    </form>
@endsection