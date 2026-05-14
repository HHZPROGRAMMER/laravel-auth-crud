<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class LoginController extends Controller
{
    public function login(): View
    {
        return view('Login.login');
    }

    public function loginForm(Request $resuqest){
        $information=$resuqest->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

            if(auth()->attempt($information)){
                $resuqest->session()->regenerate();
                return redirect()->intended('/index');
            }
            return back()->withErrors(['email'=>'Invalid email or password'])->onlyInput('email');
    }
}
