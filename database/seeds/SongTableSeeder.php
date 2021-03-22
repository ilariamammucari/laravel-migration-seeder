<?php

use App\Song;
use Illuminate\Database\Seeder;


class SongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $songs = config('songs');
        foreach($songs as $song){
            $newSong = new Song();

            $newSong->titolo = $song['titolo'];
            $newSong->genere = $song['genere'];
            $newSong->autore = $song['autore'];
            $newSong->anno = $song['anno'];

            $newSong->save();
        }
    }
}
