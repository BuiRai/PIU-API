<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;
use App\TypeSong;
use App\Channel;

class Songs3rdSESeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Artists
        $banYa = Artist::where('name', 'BanYa')->first();
        $novasonic = Artist::where('name', 'Novasonic')->first();
        $tashannie = Artist::where('name', 'Tashannie')->first();
        $sechsKies = Artist::where('name', 'Sechs Kies')->first();
        $clon = Artist::where('name', 'CLON')->first();

        // Types
        $shortType = TypeSong::find(1);
        $normalType = TypeSong::find(2);
        $remixType = TypeSong::find(3);
        $fullType = TypeSong::find(4);

        // Game versions
        $thirdSE = GameVersion::where('name', 'The O.B.G. The Season Evolution Dance Floor')->first();

        $song = Song::create([
            'id'=>'401',
            'title'=>'Oh! Rosa',
            'bpm'=>'148',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$thirdSE->id,
            'type_song_id'=>$normalType->id
        ]);
        $song->channels()->attach([1]);
        $song = Song::create([
            'id'=>'402',
            'title'=>'First Love',
            'bpm'=>'104',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$thirdSE->id,
            'type_song_id'=>$normalType->id
        ]);
        $song->channels()->attach([1]);
        $song = Song::create([
            'id'=>'403',
            'title'=>'Betrayer',
            'bpm'=>'92',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$thirdSE->id,
            'type_song_id'=>$normalType->id
        ]);
        $song->channels()->attach([1]);
        $song = Song::create([
            'id'=>'404',
            'title'=>'Solitary',
            'bpm'=>'136',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$thirdSE->id,
            'type_song_id'=>$normalType->id
        ]);
        $song->channels()->attach([1]);
        $song = Song::create([
            'id'=>'405',
            'title'=>'Mr. Larpus',
            'bpm'=>'190',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$thirdSE->id,
            'type_song_id'=>$normalType->id
        ]);
        $song->channels()->attach([1]);
    }
}
