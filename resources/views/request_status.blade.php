@extends('layout')
@section('content')
<link rel="stylesheet" href="css/request_status.css">
<div class="container" style="margin-top: 7rem;">
<h1>Requests</h1>
    <div class="row">
        <h3>Processed :</h3>
        @foreach( auth()->user()->applications as $request)
        @if($request->status == 'processed')
        <div class="col-md-4 d-flex justify-content-center align-items-center">
            <div class="box">
                    <h5 style="font-size:larger;font-weight:bolder;color: white;">Your request:</h5>
                    <p class="card-title text-center" style="color: white;">{{$request->description}}</p>
                    <h5 style="font-size:larger;font-weight:bolder;color: white;">Reply from us:</h5>
                    <p class="card-title text-center" style="color: #05fc4b;">{{$request->reply}}</p>
            </div>
        </div>
        @endif
        @endforeach        
    </div>

    
    <div class="row">
        <h3>Pending :</h3>
        @foreach( auth()->user()->applications as $request)
        @if($request->status == 'pending')
        <div class="col-md-4 d-flex justify-content-center align-items-center">
            <div class="box">
                    <h5 style="font-size:larger;font-weight:bolder;color: white;">Your request:</h5>
                    <p class="card-title text-center" style="color: white;">{{$request->description}}</p>
                    <h5 style="font-size:larger;font-weight:bolder;color: white;">Status:</h5>
                    <p class="card-title text-center" style="color: green;">{{$request->status}}</p>
            </div>
        </div>
        @endif
        @endforeach
</div>
</div>
@endsection