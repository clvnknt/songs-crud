<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $table = 'songs';
    protected $primaryKey = 'id';
    protected $fillable = ['song_title', 'song_genre', 'composer_name', 'song_lyrics', 'year_created'];
}
