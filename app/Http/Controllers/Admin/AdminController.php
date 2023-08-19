<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Show admin login form
     *
     * @return void
     */
    public function adminLoginForm()
    {
        return view('backend.auth.login');
    }

    public function adminPostLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect()->route('app.dashboard');
        }

        return back()->withInput($request->only('email', 'remember'));
    }

    public function adminLogout()
    {
        Auth::guard( 'admin' )->logout();
        return redirect()->route( 'app.login' );
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
