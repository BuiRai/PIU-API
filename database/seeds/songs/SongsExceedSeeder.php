<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;
use App\Type;
use App\Channel;

class SongsExceedSeeder extends Seeder
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

        // Types
        $shortType = Type::find(1);
        $normalType = Type::find(2);
        $remixType = Type::find(3);
        $fullType = Type::find(4);

        // Gme version
        $exceed = GameVersion::where('name', 'Exceed')->first();

        $song = Song::create([
            'id'=>'A01',
            'title'=>'Final Audition 3 U.F',
            'bpm'=>'130.5',
            'artist_id'=>$banya->id,
            'game_version_id'=>$exceed->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([3]);
        $song = Song::create([
            'id'=>'A02',
            'title'=>'Naissance 2',
            'bpm'=>'129',
            'artist_id'=>$banya->id,
            'game_version_id'=>$exceed->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([3]);
        $song = Song::create([
            'id'=>'A03',
            'title'=>'Monkey Fingers',
            'bpm'=>'186',
            'artist_id'=>$banya->id,
            'game_version_id'=>$exceed->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([3]);
        $song = Song::create([
            'id'=>'A04',
            'title'=>'Blazing',
            'bpm'=>'158',
            'artist_id'=>$banya->id,
            'game_version_id'=>$exceed->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([3]);
        $song = Song::create([
            'id'=>'A05',
            'title'=>'Pump Me Amadeus',
            'bpm'=>'170',
            'artist_id'=>$banya->id,
            'game_version_id'=>$exceed->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([3]);
        $song = Song::create([
            'id'=>'A06',
            'title'=>'X-Treme',
            'bpm'=>'162',
            'artist_id'=>$banya->id,
            'game_version_id'=>$exceed->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([3]);
        $song = Song::create([
            'id'=>'A07',
            'title'=>'Get Up!',
            'bpm'=>'180',
            'artist_id'=>$banya->id,
            'game_version_id'=>$exceed->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([3]);
    }
}
