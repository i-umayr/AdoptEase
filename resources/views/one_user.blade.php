@extends('layout')
@section('content')
<h2>Information</h2>
<table class="table table-bordered table-dark text-bg-dark">
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Address</td>
        <td>Income</td>
        <td>Marital Status</td>
        <td>Family Size</td>
        <td>Occupation</td>
        <td>Gender</td>
    </tr>
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
</table>
@endsection

