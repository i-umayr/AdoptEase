@extends('layout')
@section('content')
<link rel="stylesheet" href="/css/table.css">
@if($user->User->orphan_health == '[]')
<div class="container" style="margin-top: 7rem;">
    <p>NO RECORD EXISTS</p>
    <div>
        <p>Fill the form below to add a record:</p>
    </div>
    <form method="POST" action="/new_record" class="bg-dark text-bg-dark p-4 rounded-3 border-1 ">
        @csrf
        <div class="p-2">
            <label for="ailment">Enter the name of the ailment:</label>
            <input type="text" id="ailment" name="ailment">
            @error('ailment')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="p-2">
            <label for="d_date">Date of Diagnosis:</label>
            <input type="date" id="d_date" name="d_date">
        </div>

        <div hidden>
            <label for="user_id">User ID:</label>
            <input type="text" id="user_id" name="user_id" value="{{$user->User->id}}">
        </div>
        <button type="submit" class="btn btn-primary p-2">Submit</button>
    </form>
</div>
@else
<div class="container" style="margin-top: 7rem;">
    <div>
        <h3>Existing Records</h3>
    </div>
    <table class="">
        <tr>
            <th>Ailment</th>
            <th>Diagnosis Date</th>
            <th>Status</th>
            <th>Treatment Date</th>
            <th>More</th>
        </tr>

        @foreach($user->User->orphan_health as $rec)
        <tr>
            <td>{{$rec->ailment}}</td>
            <td>{{$rec->d_date}}</td>
            <td>{{$rec->status}}</td>
            @if($rec->status == 'Treatment Underway')
            <form action="/treatment_date" method="POST">
                @csrf
                <td><input type="date" id="t_date" name="t_date"></td>
                @error('t_date')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                <td><button type="submit" class="btn btn-primary">Submit the New Treatment Date</button></td>
                <div hidden>
                    <input type="text" id="user_id" name="user_id" value="{{$rec->id}}">
                </div>
            </form>
            @else
            <td>{{$rec->t_date}}</td>
            <td></td>
            @endif
        </tr>
        @endforeach
    </table>
</div>
<br>
<div class="container">
    <div class="">
        <div>
            <h3>Add a new record</h3>
        </div>
        <form method="POST" action="/new_record" class="bg-dark text-bg-dark p-4 rounded-3 border-1 ">
            @csrf
            <div class="p-2">
                <label for="ailment">Enter the name of the ailment:</label>
                <input type="text" id="ailment" name="ailment">
                @error('ailment')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="p-2">
                <label for="d_date">Date of Diagnosis:</label>
                <input type="date" id="d_date" name="d_date">
            </div>

            <div hidden>
                <label for="user_id">User ID:</label>
                <input type="text" id="user_id" name="user_id" value="{{$user->User->id}}">
            </div>
            <button type="submit" class="btn btn-primary p-2">Submit</button>
        </form>
    </div>
</div>
@endif


@endsection