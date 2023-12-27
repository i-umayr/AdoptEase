<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ViewUsersController extends Controller
{
    public function index()
    {
        return view('view_users',[
            'users' => User::all()
        ]);
    }
}
