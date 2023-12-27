<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ShowAdopterController extends Controller
{
    
    public function index($id)
    {
        return view('one_user', [
            'user' => User::findOrFail($id)
        ]);
    
    }
   
}
