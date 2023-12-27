@extends('layout')
@section('content')
<link rel="stylesheet" href="/css/chat.css">
<div class="container" style="margin-top: 7rem;">
    <h1>{{$user->user->User_access->first_name}}'s request</h1>
    <div class="message my-message">{{$user->description}}</div>
    <!-- $user->id -->
    <form method="POST" action="/application_processed">
        @csrf
        <label for="reply">Write a reply:</label>
        <input type="text" name="reply" id="reply" placeholder="write your reply here">
        @error('reply')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
        <button type="submit" class="btn btn-primary">{{ __('Send') }}</button>
        <div hidden>
            <input type="text" name="user_id" value="{{$user->id}}">
        </div>
    </form>
</div>

@endsection