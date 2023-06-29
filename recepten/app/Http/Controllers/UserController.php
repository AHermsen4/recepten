<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Laat registratie zien
    public function register()
    {
        return view('users.register');
    }

    public function saveRegister(Request $request)
    {
        $formInhoud = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required'
        ]);

        $user = User::create($formInhoud);

        auth()->login($user);

        return redirect('/');
    }

    //Laat login zien
    public function login() 
    {
        return view('users.login');
    }

    //Inloggen
    public function signIn(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back();
        
    }

    //Logout
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
