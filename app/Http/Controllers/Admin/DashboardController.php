<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth:admin');
    }
    /**
     * Display Dashboard tepmlate here
     */
    public function dashboard()
    {
        return view('backend.dashboard');
    }
}
