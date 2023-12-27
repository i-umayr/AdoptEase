<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orphan_information;
use App\Models\Health;

class HealthController extends Controller
{
    public function index()
    {
        return view('health_view',[
            'students' => Orphan_information::all()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'ailment' => 'required|min:2|max:50',
            'd_date' => 'required',
            'user_id' => '',
            'status' => '',
        ]);

        $record = Health::create(
            [
                'user_id' => $attributes['user_id'],
                'ailment' => $attributes['ailment'],
                'd_date' => $attributes['d_date'],
                'status' => 'Treatment Underway',
            ]
            );
        return back();
    }

    public function treatment()
    {
        $attributes = request()->validate(
            [
                'user_id' => '',
                'status' => '',
                't_date' => 'required|date',
            ]
            );
        $a = $attributes['user_id'];
        $record = Health::find($a);
        $record->t_date = $attributes['t_date'];
        $record->status = 'Treatment Completed';
        $record->save();
        return back();
    }
}
