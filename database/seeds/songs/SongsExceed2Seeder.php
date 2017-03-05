<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;

class SongsExceed2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Artists
        $louis = Artist::where('name', 'Louis')->first();
        $som2 = Artist::where('name', 'Som2')->first();
        $wax = Artist::where('name', 'Wax')->first();
        $banya = Artist::where('name', 'BanYa')->first();

        // Gme version
        $exceed2 = GameVersion::where('name', 'Exceed 2')->first();

        Song::create([
            'id'=>'B06',
            'title'=>'Deja Vu',
            'bpm'=>'115',
            'artist_id'=>$som2->id,
            'game_version_id'=>$exceed2->id
        ]);
        Song::create([
            'id'=>'B13',
            'title'=>'I\'ll Give You All My Love',
            'bpm'=>'164',
            'artist_id'=>$wax->id,
            'game_version_id'=>$exceed2->id
        ]);
        Song::create([
            'id'=>'B16',
            'title'=>'J Bong',
            'bpm'=>'140',
            'artist_id'=>$banya->id,
            'game_version_id'=>$exceed2->id
        ]);
        Song::create([
            'id'=>'B17',
            'title'=>'Hi-Bi',
            'bpm'=>'145',
            'artist_id'=>$banya->id,
            'game_version_id'=>$exceed2->id
        ]);
        Song::create([
            'id'=>'B18',
            'title'=>'Solitary 2',
            'bpm'=>'136',
            'artist_id'=>$banya->id,
            'game_version_id'=>$exceed2->id
        ]);
        Song::create([
            'id'=>'B19',
            'title'=>'Canon D',
            'bpm'=>'160',
            'artist_id'=>$banya->id,
            'game_version_id'=>$exceed2->id
        ]);
        Song::create([
            'id'=>'B28',
            'title'=>'Treme Vook of the War Remix',
            'bpm'=>'184~202',
            'artist_id'=>$banya->id,
            'game_version_id'=>$exceed2->id
        ]);
        Song::create([
            'id'=>'B29',
            'title'=>'BanYa Classic Remix',
            'bpm'=>'162.2',
            'artist_id'=>$banya->id,
            'game_version_id'=>$exceed2->id
        ]);
        Song::create([
            'id'=>'B56',
            'title'=>'BanYa HIPHOP Remix',
            'bpm'=>'99',
            'artist_id'=>$banya->id,
            'game_version_id'=>$exceed2->id
        ]);
        Song::create([
            'id'=>'B57',
            'title'=>'Canon-D Full Mix',
            'bpm'=>'160',
            'artist_id'=>$banya->id,
            'game_version_id'=>$exceed2->id
        ]);
    }
}
