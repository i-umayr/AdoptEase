@extends('layout')
@section('content')
<link rel="stylesheet" href="/css/table.css">
<div class="container" style="margin-top:7rem;">
<h2>Information</h2>
<table class="">
    <thead>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Income</th>
        <th>Marital Status</th>
        <th>Family Size</th>
        <th>Occupation</th>
        <th>Gender</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->User_access->first_name}}</td>
        <td>{{$user->User_access->last_name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->User_access->address}}</td>
        <td>{{$user->User_access->income}}</td>
        <td>{{$user->User_access->marital_status}}</td>
        <td>{{$user->User_access->family_size}}</td>
        <td>{{$user->User_access->occupation}}</td>
        <td>{{$user->User_access->gender}}</td>
    </tr>
    </tbody>
</table>
</div>
@endsection

