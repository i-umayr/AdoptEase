@extends('layout')
@section('content')
<link rel="stylesheet" href="css/table.css">
<div class="container">
    
<h3 style="margin-top: 7rem;">Attendance</h3>
<p>Attendance for {{$date}} has not yet been marked.</p>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Attendance</th>
            </tr>
        </thead>
        <form method="POST" action="/mark_attendance">
            @csrf
            @foreach($user as $a)
            @if($a->user_type == 'orphan')

            <tbody>
                <tr>
                    <td>{{$a->id}}</td>
                    <td>{{$a->name}}</td>
                    <td>
                        <input type="radio" id="absent" name="{{$a->id}}" value="absent" required="required">
                        <label for="html">Absent</label><br>
                        <input type="radio" id="present" name="{{$a->id}}" value="present" required="required">
                        <label for="html">Present</label><br>

                        <!-- for date -->
                        <div hidden>
                            <input type="date" name="a_date" value="{{$date}}">
                        </div>
                    </td>
                </tr>

            </tbody>
            @endif
            @endforeach
            <button type="submit" class="btn btn-success" style="float:right;">Save</button>
        </form>
    </table>
</div>
@endsection