<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';
    protected $username = 'username';
    protected $guard = 'web';

    public function getLogin()
    {

        if (Auth::guard('web')->check()) {
            return redirect()->route("dashboard");
        }

        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $auth = Auth::guard('web')->attempt(['username' => $request->username,
            'password' => $request->password, 'active' => 1]);
        if ($auth) {
            return redirect()->route('dashboard');
        }

        return redirect()->route('/');
    }

    public function getLogout()
    {
        Auth::guard('web')->logout();       ;
        return redirect()->route("/");
    }
}
