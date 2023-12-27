@extends('layout')
@section('content')

<link rel="stylesheet" href="css/chat.css">
<div style="margin-top: 7rem;position:relative;" class="container">
    <div class="">
        <h3>Adopters' Pending Requests</h3>
        <div class="border-bottom p-2 p-4">
            @foreach($applications as $user)
            <div class="row border pl-5 pr-5">
                @if($user->user->user_type == 'adopter' && $user->status == 'pending')
                <h5>Request from Mr/Mrs {{$user->user->name}}</h5>
                <p class="message my-message">{{$user->description}}</p>
                <a href="process_request/{{$user->id}}" style="max-width: 10rem;" class="btn btn-primary">Process request</a>
                @endif
            </div>
            @endforeach
        </div>
    </div>
    <br>

    <h3>Adopters Processed Requests</h3>
    @foreach($applications as $index => $user)
    @if($user->user->user_type == 'adopter' && $user->status == 'processed')
    @php
    $margin = $index > 0 ? '25rem' : '0';
    @endphp

    <div style="margin-top:<?= $margin ?>">
        <div class="container clearfix">
            <div class="chat">
                <div class="chat-header clearfix">
                    <div class="chat-about">
                        <div class="chat-with">{{$user->user->name}}</div>
                    </div>
                </div> <!-- end chat-header -->

                <div class="chat-history">
                    <ul>
                        <li class="clearfix">
                            <div class="message-data">
                                <span class="message-data-name">{{$user->user->name}}</span> 
                            </div>
                            <div class="message my-message ">
                                {{$user->description}}
                            </div>
                        </li>

                        <li>
                            <div class="message-data align-right">
                                <span class="message-data-name"> You</span>
                            </div>
                            <div class="message other-message float-right">
                                {{$user->reply}}
                            </div>
                        </li>
                    </ul>

                </div> <!-- end chat-history -->

            </div> <!-- end chat -->

        </div> <!-- end container -->

        @endif
        @endforeach
    </div>

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