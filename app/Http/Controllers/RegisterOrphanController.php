<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Orphan_information;

class RegisterOrphanController extends Controller
{
    public function index()
    {
        return view('register_orphan');
    }

    public function create()
    {
        $attributes = request()->validate([
            'email' => 'required|email|max:255|min:4|unique:users,email',
            'password' => 'required|max:255|min:3',
            'first_name' => 'required|max:255|min:3',
            'last_name' => 'required|max:255|min:3',
            'age' => 'required|max:17|min:0.1',
            'gender' => 'required',
        ]);
        
        $user = User::create([
            'email' => $attributes['email'],
            'name' => $attributes['first_name'],
            'password' => bcrypt($attributes['password']),
            'user_type' => 'orphan',
        ]);
        $info = Orphan_information::create(
            [
                'user_id' => $user['id'],
                'first_name' => $attributes['first_name'],
                'last_name' => $attributes['last_name'],
                'gender' => $attributes['gender'],
                'age' => $attributes['age'],
            ]
            );
            
        return view("orphan_reg_success");
    }
}
