<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        $attempt = Auth::attempt($request->only('email', 'password'));
        if ($attempt) {
            return redirect('/');
        } else {
            return redirect()->back()->with('login', 'fail');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
