<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Attendance;
use App\Models\Date;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function redirect()
    {
        return view('attendance_date');
    }

    public function index()
    {
        $attributes = request()->validate([
            'a_date' => 'required'
        ]);
        if (Attendance::where('date', $attributes['a_date'])->exists())
        {
            return view('old_attendance', [
                'date' => $attributes['a_date'],
                'attendance' => Attendance::all()
            ]);
        }
        else
        {
            // $date = $attributes['a_date'];
            return view('attendace_page',[
                'user' => User::all(),
                'date' => $attributes['a_date']
            ]);
        }
    }
    
    public function store(Request $request)
    {
        // $dataprovided = []; //make an empty array
        
        // //since the number of students we are recieving is variable and we have to validate that,
        // //we take a look at how the 'validate()' function works; it needs an array to validate it
        // //so we make an array that will all the user_ids of the orphans be like: '4' => 'required'
        // $students = User::all(); //we store all the users in $students array
        // foreach($students as $b)
        // {
        //     if($b->user_type == 'orphan') //for users who are orphans
        //     {
        //         $dataprovided[$b->id] = 'required';
        //     }
        // }
        // // return($dataprovided);
        // $k = request()->validate($dataprovided);
        // // return('after validation');

        $attributes = $request->all();
        foreach($attributes as $a => $status)
        {
            if($a == '_token' || $a == 'a_date')
            {

            }
            else
            {
                $attendance = Attendance::create([
                    'user_id' => $a,
                    'attendance' => $status,
                    'date' => $attributes['a_date'],
                ]);
            }
        }
        return back();
    }

    public function change(Request $request)
    {
        $attributes = $request->all();
        // return($attributes);
        foreach($attributes as $a => $status) //going through every element of array
        {
            if($a == '_token' || $a == 'a_date')
            {

            }
            else
            {
                $row = Attendance::all(); //store entire attendance table in $row
                foreach($row as $ins) //go through each row of attendance
                {
                    if($attributes['a_date'] == $ins->date && $a == $ins->user_id) //if for a particular row of the attendance table, it's date is equal to the date coming from the form and its 
                    //id is equal to the array element we are currently parsing
                    {
                        $ins->attendance = $status; //change the status of that attendance table row to the new status provided by the form
                        $ins->save();
                    }
                }
                
            }
        }
        return back();
    }
}
