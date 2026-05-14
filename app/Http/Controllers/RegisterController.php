<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Contracts\View\View as ContractsView;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class RegisterController extends Controller
{
    public function register():View
    {
        return view('Login.register');
    }

    public function registerForm(Request $request)
    {
        $informations = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'  
        ]);

        $informations['password'] = Hash::make($informations['password']);


        User::create($informations);

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
}
