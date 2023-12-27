@extends('layout')
@section('content')
<link rel="stylesheet" href="css/table.css">
<div class="container" style="margin-top: 7rem;">
    <div>
        <p class="">Attendance for your entered date i.e {{$date}} already exists as follows:</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Attendance</th>
                <th>Changes(if you wish to make any)</th>
            </tr>
        </thead>
        <form method="POST" action="/change_attendance">
            @foreach($attendance as $item)
            @if($item->date == $date)
            <tbody>
                <tr>
                    <td>{{$item->user_id}}</td>
                    <td>{{$item->User->name}}</td>
                    <td>
                        {{$item->attendance}}
                    </td>
                    <td>
                        @csrf
                        <input type="radio" id="absent" name="{{$item->user_id}}" value="absent" required="required">
                        <label for="html">Absent</label><br>
                        <input type="radio" id="present" name="{{$item->user_id}}" value="present" required="required">
                        <label for="html">Present</label><br>
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