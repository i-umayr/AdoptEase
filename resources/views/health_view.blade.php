@extends('layout')
@section('content')
<table class="table table-bordered table-dark text-bg-dark ">
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Update</th>
  </tr>
  @foreach($students as $a)
  <tr>
    <td>{{$a->first_name}}</td>
    <td>{{$a->last_name}}</td>
    <td>{{$a->age}}</td>
    <td>{{$a->gender}}</td>
    <td><a href="update_health/{{$a->id}}"><button class="btn btn-primary">Change</button></a></td>
  </tr>
  @endforeach
</table>
@endsection