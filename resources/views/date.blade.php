@extends('layout')
@section('content')
    <form mehtod="POST" action="/attendance">
        @csrf
        <h2>Enter today's date</h2>
        <label for="date">Date</label>
        <input type="date" id="date" name="date">
    </form>
@endsection