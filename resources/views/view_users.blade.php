@extends('layout')
@section('content')
<h1>Users List</h1>
<div>
    <h3>Adopters</h3>
        <table class="table table-bordered table-dark text-bg-dark">
            <tr>
                <td>Name</td>
                <td>ID</td>
            </tr>
            @foreach($users as $user)
                <tr>
                    @if($user->user_type == 'adopter')
                        <td><a href="show_adopter/{{$user->id}}">{{$user->name}}</a></td>
                        <td>{{$user->id}}</td>
                    @endif
                </tr>
            @endforeach
            
        </table>

    <!-- <h3>Students</h3>
    <table class="table table-bordered table-dark text-bg-dark">
        <tr>
            <td>Name</td>
            <td>ID</td>
        </tr>
        @foreach($users as $user)
            <tr>
                @if($user->user_type == 'orphan')
                    <td><a href="show_children/{{$user->id}}">{{$user->name}}</a></td>
                    <td>{{$user->id}}</td>
                @endif
            </tr>
        @endforeach
            
        </table> -->
</div>
@endsection
