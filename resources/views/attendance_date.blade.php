@extends('layout')
@section('content')
    <div>
        <form method="POST" action="/attendance">
            @csrf
            <label for="date">Enter the date:</label>
            <input type="date" id="date" name="a_date">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection