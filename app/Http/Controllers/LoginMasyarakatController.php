<?php

namespace App\Http\Controllers;

// namespace App\Http\Controllers\Auth;
use Auth;

use Illuminate\Http\Request;

class LoginMasyarakatController extends Controller
{
    public function __construct(){
        $this->middleware('guest:masyarakat',['except'=>'logout']);
    }

    public function formlogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|exists:masyarakats',
            'password' => 'required'
        ]);

        if(Auth::guard('masyarakat')->attempt($credentials, $request->remember)){
            $request->session()->regenerate();
            return redirect()->intended(config('masyarakat.prefix'));
        };

        return back()->withErrors([
            'email' => 'The provided credentials do not match our record',
        ]);
    }

    public function logout()
    {
        Auth::guard('masyarakat')->logout();
        return redirect()->route('masyarakat.login');
    }
}
