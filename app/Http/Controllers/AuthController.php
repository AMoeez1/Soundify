<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function profile(){
        $user = Auth::id();
        $songs = Song::where('artist_id', $user)->get();
        return view('profile', ['songs' => $songs]);
    }

    public function showEdit(){
        return view('edit_profile');
    }

    public function editProfile(Request $request){
        $user = Auth::user();
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'profile' => 'nullable|mimes:jpg,webp,png,jpeg',
            'banner' => 'nullable|mimes:jpg,webp,png,jpeg',
            'about' => 'nullable',
        ]);
        if($user){
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->about = $request->about;
            if($request->hasFile('profile')){
                if($user->profile){
                    Storage::disk('public')->delete($user->profile);
                }
                $user->profile = $request->file('profile')->store('users/profile', 'public');
            }
            if($request->hasFile('banner')){
                if($user->banner){
                    Storage::disk('public')->delete($user->banner);
                }
                $user->banner = $request->file('banner')->store('users/banner', 'public');
            }
            $user->save();
            return redirect()->route('profile');
        } else {
            return back()->withErrors(['Error' => 'No User Found']);
        }
    }
}