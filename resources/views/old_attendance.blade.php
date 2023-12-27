@extends('layout')
@section('content')
    <div>
        <p class="bg-dark text-bg-dark p-2 rounded-3">Attendance for your entered date i.e {{$date}} already exists as follows:</p>
    </div>

<form method="POST" action="/change_attendance">
    <table class="table table-bordered table-dark text-bg-dark">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Attendance</td>
            <td>Changes(if you wish to make any)</td>
        </tr>
        @foreach($attendance as $item)
        @if($item->date == $date)
            <tr>
                <td>{{$item->user_id}}</td>
                <td>{{$item->User->name}}</td>
                <td>
                    {{$item->attendance}}
                </td>
                <td>
                    @csrf
                    <input type="radio" id="absent" name = "{{$item->user_id}}" value="absent" required="required">
                    <label for="html">Absent</label><br>
                    <input type="radio" id="present" name = "{{$item->user_id}}" value="present" required="required">
                    <label for="html">Present</label><br>
                    <div hidden>
                    <input type="date" name="a_date" value="{{$date}}">
                    </div>
                </td>
            </tr>
        @endif
        @endforeach
    </table>
    <button type="submit" class="btn btn-primary">Make Changes</button>
</form>
@endsection
