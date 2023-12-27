@extends('layout')
@section('content')
<link rel="stylesheet" href="css/table.css">
<div class="container" style="margin-top:7rem;">
    <h1>Users List</h1>
    <h3>Adopters</h3>
    <table class="">
        <thead>
            <tr>
                <th>Name</th>
                <th>ID</th>
            </tr>
        </thead>
        @foreach($users as $user)
        <tbody>
            <tr>
                @if($user->user_type == 'adopter')
                <td><a href="show_adopter/{{$user->id}}">{{$user->name}}</a></td>
                <td>{{$user->id}}</td>
                @endif
            </tr>
        </tbody>
        @endforeach

    </table>
</div>
@endsection