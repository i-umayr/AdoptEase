@extends('layout')
@section('content')
    <div style="margin-top: 7rem;">
        <form method="POST" action="/attendance" >
            <h1>ACHTON!</h1>
            @foreach($children as $user)
            <div class="row">
                <div>{{$user->name}}</div>
                <div>{{$user->id}}</div>
                <input type="radio" id="present" name = "{{$user->name}}" value="present">
                <label for="html">Present</label><br>
            </div>
            @endif
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>   
    </div>
@endsection