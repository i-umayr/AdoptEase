@extends('layout')
@section('content')
<h2>Information</h2>
<table class="table table-bordered table-dark text-bg-dark">
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Gender</td>
    </tr>
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->Orphan_access->first_name}}</td>
        <td>{{$user->Orphan_access->last_name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->Orphan_access->gender}}</td>
    </tr>
</table>
@endsection

