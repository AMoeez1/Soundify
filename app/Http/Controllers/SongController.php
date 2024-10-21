<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Auth;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function showSong(){

        return view('songs.add_song');
    }

    public function addSong(Request $request){
        $request->validate([
            'audio' => 'required|mimes:mp4,wav,mp3',
            'song' => 'required',
            'feat_artist' => 'nullable|exists:users,username',
            'cover' => 'required|mimes:png,jpg,webp,jpeg',
            'from' => 'nullable',
            'writer' => 'required',
            'music' => 'required',
        ]);
        $user = Auth::user();
        $song = Song::create([
            'audio' => $request->file('audio')->store('users/songs/audio', 'public'),
            'song_name' => $request->song,
            'artist_id' => $user->id,
            'artist_name' => $user->name,
            'feat_artist' => $request->feat,
            'from' => $request->from,
            'writer' =>$request->writer,
            'music' => $request->music,
            'cover' => $request->file('cover')->store('users/songs/cover', 'public'),
            'created_at' => now(),
        ]);

        if($song){

            return redirect()->route('profile')->with('Res', 'Song added successfully');
        } else {
            return back();
        }
    } 

    public function showEditSong($id){
        
    }
}
