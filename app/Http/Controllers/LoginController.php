<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login_page');
    }
    // authenticates the person trying to login
    public function authenticate()
    {
        $attributes = request()->validate([ //validate the given data
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($attributes)){ //attempt to sign in the given user with the given information
            if(auth()->user()->user_type == 'manager') //if type is manager
            {
                return view('manager_dashboard');
            }
            else if(auth()->user()->user_type == 'adopter')
            {
                return view('adopter_dashboard');
            }
            else if(auth()->user()->user_type == 'orphan')
            {
                return view('orphan_dashboard');
            }
        }

        return back()
            ->withInput()
            ->withErrors(['email' => 'Your provided credentials are incorrect!']);
    }
}
