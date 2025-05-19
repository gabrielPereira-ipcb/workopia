<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class AuthManager extends Controller
{
    function login(){
        return view('auth.login');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended(route("home"));
        }
        return redirect(route("login"))->with("error","Invalid credentials");
        // Perform login logic here
        // For example, using Laravel's built-in authentication
        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect()->intended('dashboard');
        }
    }
    function register(){
        return view('auth.register');
    }
    function registerPost(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
        // Perform registration logic here
        // For example, using Laravel's built-in authentication
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        if( $user->save() ){
            return redirect(route("login"))->with("success","User created successfully");
        }
    }
}
