<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function showLoginForm(){
        return view('guest.login');
    }
    function showRegistrationForm(){
        return view('guest.register');
    }

    function register(RegistrationRequest $request){
        $user = User::create([
            'name' => $request->firstname ." ". $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type' => "user"
        ]);

        Auth::login($user);

        return redirect()->route('login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return Auth::user()->user_type == "user" ? redirect()->intended(route('home')) : redirect()->intended(route('admin.home')); 
        }

        return back()->withErrors(['email' => 'Invalid email or password']);
    }

    function logout(Request $request){
        
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route("home"))->with('status', 'You have been logged out.');

    }


}
