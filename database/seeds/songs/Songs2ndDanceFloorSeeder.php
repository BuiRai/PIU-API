<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;
use App\Type;
use App\Channel;

class Songs2ndDanceFloorSeeder extends Seeder
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
        $shortType = Type::find(1);
        $normalType = Type::find(2);
        $remixType = Type::find(3);
        $fullType = Type::find(4);

        // Game versions
        $secondDF = GameVersion::where('name', 'The 2nd Dance Floor')->first();

        // Songs
        $song = Song::create([
            'id'=>'204',
            'title'=>'Final Audition',
            'bpm'=>'130.5',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$secondDF->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([1]);
        $song = Song::create([
            'id'=>'205',
            'title'=>'Extravaganza',
            'bpm'=>'195',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$secondDF->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([1]);
        $song = Song::create([
            'id'=>'212',
            'title'=>'Com\'back',
            'bpm'=>'158',
            'artist_id'=>$sechsKies->id,
            'game_version_id'=>$secondDF->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([1]);
        $song = Song::create([
            'id'=>'213',
            'title'=>'Mobius Strip',
            'bpm'=>'106',
            'artist_id'=>$sechsKies->id,
            'game_version_id'=>$secondDF->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([1]);
        $song = Song::create([
            'id'=>'224',
            'title'=>'Repeatorment Remix',
            'bpm'=>'150',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$secondDF->id,
            'type_id'=>$remixType->id
        ]);
        $song->channels()->attach([1, 11]);

    }
}
