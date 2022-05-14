@extends('songs.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Add New Song</div>
  <div class="card-body">
      
      <form action="{{ url('song') }}" method="post">
        {!! csrf_field() !!}
        <label>Song Title</label></br>
        <input type="text" name="song_title" id="song_title" class="form-control"></br>
        <label>Song Genre</label></br>
        <input type="text" name="song_genre" id="song_genre" class="form-control"></br>
        <label>Name of Composer</label></br>
        <input type="text" name="composer_name" id="composer_name" class="form-control"></br>
        <label>Song Lyrics</label></br>
        <input type="text" name="song_lyrics" id="song_lyrics" class="form-control"></br>
        <label>Year Created</label></br>
        <input type="text" name="year_created" id="year_created" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop