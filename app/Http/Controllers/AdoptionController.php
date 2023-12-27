<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\User;

class AdoptionController extends Controller
{
    public function index()
    {
        return view('adoption_request');
    }

    public function store()
    {
        $attributes = request()->validate
        ([
            'age' => 'required|min:0|max:17',
            'description' => 'required|min:10|max:200',
        ]);

        $req = Application::create(
            [
                'age' => $attributes['age'],
                'status' => 'pending',
                'description' => $attributes['description'],
                'reply' => '',
                'user_id' => auth()->user()->id,
            ]);
        return view("request_success");
    }

    public function storeReply()
    {
        $attributes = request()->validate([
            'reply' => 'required|min:1|max:200',
            'user_id' => 'required',            
        ]);
        
        // return view('manager_dashboard');
        $a = $attributes['user_id'];
        $record = Application::find($a);
        $record->reply = $attributes['reply'];
        $record->status = 'processed';
        $record->save();
        return view('manager_dashboard');
    }

    public function request()
    {
        return view('request_status');
    }
}
