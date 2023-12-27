<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogOutController extends Controller
{
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
