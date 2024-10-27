<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'song_name',
        'artist_id',
        'artist_name',
        'feat_artist_id',
        'feat_artist_name',
        'part_of',
        'cover',
        'audio',
        'writer',
        'music',
    ];

    protected $keyType = 'string';
    public $incrementing = 'false';

    protected static function booted(){
        static::creating(function($song) {
            $song->id = Str::uuid();
        });
    }

    public function artist(){
        return $this->belongsTo(User::class, 'artist_id');
    }
}
