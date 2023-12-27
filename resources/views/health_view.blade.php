@extends('layout')
@section('content')
<link rel="stylesheet" href="css/table.css">
<div class="container" style="margin-top: 7rem;">
  <table class="">
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Update</th>
    </tr>
    @foreach($students as $a)
    <tbody>
    <tr>
      <td>{{$a->first_name}}</td>
      <td>{{$a->last_name}}</td>
      <td>{{$a->age}}</td>
      <td>{{$a->gender}}</td>
      <td><a href="update_health/{{$a->id}}"><button class="btn btn-primary">Change</button></a></td>
    </tr>
    </tbody>
    @endforeach
  </table>
</div>
@endsection