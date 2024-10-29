<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class PagesRoutesController extends Controller
{
    public function home(){
        if (Auth::check()) {
            $songs = Song::with('artist')->inRandomOrder()->limit(5)->get();
            return view('home', ['songs' => $songs]);
        }
         else {
            return view('guest.home')->withErrors(['Error' => 'Not logged In']);
        }
    }

    public function other_profile($username){
        $user = User::where('username',$username)->first();
        $songs = Song::where('artist_id', $user->id)->get();
        
        $loggedUser = Auth::user();
        if($user){
            if($user->username !== $loggedUser->username){
                return view('other_profile', ['user' => $user, 'songs' => $songs]);
            } else {
                return redirect()->route('profile');
            }
        }
    }
}
