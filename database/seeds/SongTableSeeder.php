<?php

use App\Song;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class SongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $songs = config('songs');
        // foreach($songs as $song){
        //     $newSong = new Song();

        //     $newSong->titolo = $song['titolo'];
        //     $newSong->genere = $song['genere'];
        //     $newSong->autore = $song['autore'];
        //     $newSong->anno = $song['anno'];

        //     $newSong->save();
        // }
        $genere = ['pop','rock','trap','rap'];
        for( $i = 0; $i < 10; $i++){
            $newSong = new Song();
            $key_genere = array_rand($genere);

            $newSong->titolo = $faker->lexify('?????');
            $newSong->genere = $genere[$key_genere];
            $newSong->autore = $faker->name();
            $newSong->anno = $faker->year();

            $newSong->save();
        }

    }
}
