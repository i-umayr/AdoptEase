@extends('layout')
@section('content')
    <h3>Attendance</h3>
    <p>Attendance for {{$date}} has not yet been marked.</p>
    <table class="table table-bordered table-dark text-bg-dark">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Attendance</td>
        </tr>
        <form method="POST" action="/mark_attendance">
            @csrf
            @foreach($user as $a)
                @if($a->user_type == 'orphan')
                    <tr>
                        <td>{{$a->id}}</td>
                        <td>{{$a->name}}</td>
                        <td>
                            <input type="radio" id="absent" name = "{{$a->id}}" value="absent" required="required">
                            <label for="html">Absent</label><br>
                            <input type="radio" id="present" name = "{{$a->id}}" value="present" required="required">
                            <label for="html">Present</label><br>

                            <!-- for date -->
                            <div hidden>
                                <input type="date" name="a_date" value="{{$date}}">
                            </div>
                        </td>
                    </tr>
                @endif
            @endforeach
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </table>
@endsection