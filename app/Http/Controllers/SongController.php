<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Models\Song;
 
class SongController extends Controller
{
    public function index()
    {
        $songs = Song::all();
        return view ('songs.index')->with('songs', $songs);
    }
 
    
    public function create()
    {
        return view('songs.create');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        Song::create($input);
        return redirect('song')->with('flash_message', 'Song Addedd!');  
    }
 
    
    public function show($id)
    {
        $song = Song::find($id);
        return view('songs.show')->with('songs', $song);
    }
 
    
    public function edit($id)
    {
        $song = Song::find($id);
        return view('songs.edit')->with('songs', $song);
    }
 
  
    public function update(Request $request, $id)
    {
        $song = Song::find($id);
        $input = $request->all();
        $song->update($input);
        return redirect('song')->with('flash_message', 'song Updated!');  
    }
 
   
    public function destroy($id)
    {
        Song::destroy($id);
        return redirect('song')->with('flash_message', 'Song deleted!');  
    }
}