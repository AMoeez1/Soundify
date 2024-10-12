<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister(){
        return view('Auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if($user){
            Auth::login($user);
            return redirect()->route('home');
        } else {
            return back()->withErrors(['Error' => 'Error Registering']);
        }
    }
    public function showLogin(){
        return view('Auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $cred = $request->only('email','password');
        if($cred){
            if(Auth::attempt($cred)){
                return redirect()->route('home');
            } else {
                return back()->withErrors(['Error' => 'Credentials Wrong']);
            }
        } else {
            return back()->withErrors(['Error' => 'Credentials Wrong']);
        }
    }
}
