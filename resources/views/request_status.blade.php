@extends('layout')
@section('content')
    <div class="row">
        <h3>Processed</h3>
        @foreach( auth()->user()->applications as $request)
        @if($request->status == 'processed')
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Your request:</h5>
                    <p class="card-title">{{$request->description}}</p>
                    <h5>Reply from us:</h5>
                    <p class="card-title">{{$request->reply}}</p>
                </div>
            </div>
        </div>
        @endif
        @endforeach        
    </div>

    
    <div class="row">
        <h3>Pending</h3>
        @foreach( auth()->user()->applications as $request)
        @if($request->status == 'pending')
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Your request:</h5>
                    <p class="card-title">{{$request->description}}</p>
                    <h5>Status:</h5>
                    <p class="card-title">{{$request->status}}</p>
                </div>
            </div>
        </div>
        @endif
        @endforeach
</div>
@endsection