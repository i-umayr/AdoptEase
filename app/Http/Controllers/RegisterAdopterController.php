<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\User_information;

class RegisterAdopterController extends Controller
{
    public function index()
    {
        return view('register_adopter');
    }

    public function create()
    {
        $attributes = request()->validate([
            'email' => 'required|email|max:255|min:4|unique:users,email',
            'password' => 'required|max:255|min:3',
            'first_name' => 'required|max:255|min:3',
            'last_name' => 'required|max:255|min:3',
            'address' => 'required|max:255|min:2',
            'occupation' => 'required|max:255|min:1',
            'username' => 'required|min:3|max:50|unique:user_informations,username',
            'income' => '',
            'family_size' => '',
            'marital_status' => '',
            'occupation' => '',
            'gender' => '',

        ]);
        
        $user = User::create([
            'email' => $attributes['email'],
            'name' => $attributes['first_name'],
            'password' => bcrypt($attributes['password']),
            'user_type' => 'adopter',
        ]);

        $info = User_information::create(
            [
                'user_id' => $user['id'],
                'first_name' => $attributes['first_name'],
                'last_name' => $attributes['last_name'],
                'address' => $attributes['address'],
                'income' => $attributes['income'],
                'username' => $attributes['username'],
                'marital_status' => $attributes['marital_status'],
                'family_size' => $attributes['family_size'],
                'occupation' => $attributes['occupation'],
                'gender' => $attributes['gender'],
            ]
            );
        auth()->login($user);

        return view("adopter_dashboard");
    }
}
