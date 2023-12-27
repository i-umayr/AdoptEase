@extends('layout')
@section('content')
<div>
    <div class="bg-dark text-bg-dark rounded-2 p-4">
            <h3>Adopters' Pending Requests</h3>
        <div class="border-bottom p-2 p-4">
            @foreach($applications as $user)
            <div class="row">
            @if($user->user->user_type == 'adopter' && $user->status == 'pending')
                <h5>Request from Mr/Mrs {{$user->user->name}}</h5>
                <p>{{$user->description}}</p>
                <button class="btn btn-primary"><a href="process_request/{{$user->id}}">Process request</a></button>
                <!-- <div>{{$user->id}}</div> -->
            @endif
            </div>
            @endforeach
        </div>
    </div>
    <br>
    <div class="bg-dark text-bg-dark rounded-2 p-4">
        <div class="p-4">
            <h3>Adopters Processed Requests</h3>
            @foreach($applications as $user)
            @if($user->user->user_type == 'adopter' && $user->status == 'processed')
            <div class="border-bottom p-2 p-4 row">
            <h5>Request from Mr/Mrs {{$user->user->name}}</h5>
                <p>{{$user->description}}</p>
                <h5>Your reply:</h5>
                <p>{{$user->reply}}</p>
                <!-- <button><a href="process_request/{{$user->id}}">Process request</a></button> -->
                <!-- <div>{{$user->id}}</div> -->
            @endif
            </div>
            @endforeach
        </div>
    </div>
</div>
<div>
    <!-- <h3 class="bg-dark text-bg-dark rounded-1">Students' applications</h3> -->
    <!-- @foreach($applications as $user)
    <div class="row">
    @if($user->user->user_type == 'orphan')
        <div>{{$user->description}}</div>
         <div>{{$user->id}}</div>
    @endif
    </div>
    @endforeach
</div>
@endsection -->

<!-- <a href="/view_users " class="text-decoration-none text-bg-primary"><button class="btn btn-primary">Go</button></a> -->