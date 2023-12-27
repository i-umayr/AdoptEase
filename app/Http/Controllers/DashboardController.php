<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function manager()
    {
        return view('manager_dashboard');
    }

    public function adopter()
    {
        return view('adopter_dashboard');
    }

    public function orphan()
    {
        return view('orphan_dashboard');
    }
}
