@extends('layout')
@section('content')

<link rel="stylesheet" href="css/table.css">
    <div style="margin-top: 7rem;" class="container">
        <form method="POST" action="/attendance">
            @csrf
            <label for="date">Enter the date:</label>
            <input type="date" id="date" name="a_date">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection