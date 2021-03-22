<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected function controlli($request){
        return $request->validate([
            'titolo' => 'required',
            'genere' => 'required|max:50',
            'autore' => 'required|max:100',
            'anno' => 'required'
        ]);
    }

    public function index()
    {
        $musica = Song::all();
        $data = [
            'canzoni' => $musica
        ];
        return view('songs.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Song $song)
    {
        $data = $this->controlli($request);
        $song->fill($data);
        $song->save();

        return redirect()->route('songs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        $data = [
            'canzone' => $song ?? abort('404')
        ];
        return view('songs.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        $data = [
            'canzone' => $song ?? abort('404')
        ];
        return view('songs.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        $data = $this->controlli($request);
        $song->update($data);

        return redirect()->route('songs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        $song->delete();
        return redirect()->route('songs.index');
    }
}
