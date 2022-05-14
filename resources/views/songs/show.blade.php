@extends('songs.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Song Info</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Song Title : {{ $songs->song_title }}</h5>
        <p class="card-text">Song Genre : {{ $songs->song_genre }}</p>
        <p class="card-text">Name of Composer : {{ $songs->composer_name }}</p>
        <p class="card-text">Song Lyrics : {{ $songs->song_lyrics }}</p>
        <p class="card-text">Year Created : {{ $songs->year_created }}</p>
  </div>
       
    </hr>
  
  </div>
</div>