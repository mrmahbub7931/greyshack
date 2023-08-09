<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display Dashboard tepmlate here
     */
    public function dashboard()
    {
        return view('layouts.backend.backend');
    }
}
