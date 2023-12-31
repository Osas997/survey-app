<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login()
    {
        return view("auth.login");
    }

    public function authenticate(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard("admin")->attempt(["username" => $request->username, "password" => $request->password])) {
            // $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        if (Auth::guard("sekolah")->attempt(["npsn" => $request->username, "password" => $request->password])) {
            // $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        if (Auth::guard("guru")->attempt(["nuptk" => $request->username, "password" => $request->password])) {
            // $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        if (Auth::guard("murid")->attempt(["nisn" => $request->username, "password" => $request->password])) {
            // $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with("loginError", "Username Atau Password Salah");
    }
}
