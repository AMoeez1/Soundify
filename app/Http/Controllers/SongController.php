<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function showSong(){
        return view('songs.add_song');
    }
}
