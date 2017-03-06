<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;
use App\Type;
use App\Channel;

class SongsZeroSeeder extends Seeder
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
        $zero = GameVersion::where('name', 'Zero')->first();

        $song = Song::create([
            'id'=>'C01',
            'title'=>'Beat of the War 2',
            'bpm'=>'???',
            'artist_id'=>$banya->id,
            'game_version_id'=>$zero->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([3]);
        $song = Song::create([
            'id'=>'C02',
            'title'=>'Moonlight',
            'bpm'=>'180',
            'artist_id'=>$banya->id,
            'game_version_id'=>$zero->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([3]);
        $song = Song::create([
            'id'=>'C03',
            'title'=>'Witch Doctor',
            'bpm'=>'195',
            'artist_id'=>$banya->id,
            'game_version_id'=>$zero->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([3]);
        $song = Song::create([
            'id'=>'C04',
            'title'=>'Love is a Danger Zone 2',
            'bpm'=>'162',
            'artist_id'=>$banya->id,
            'game_version_id'=>$zero->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([3]);
        $song = Song::create([
            'id'=>'C05',
            'title'=>'Phantom',
            'bpm'=>'136',
            'artist_id'=>$banya->id,
            'game_version_id'=>$zero->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([3]);
        $song = Song::create([
            'id'=>'C06',
            'title'=>'Papa Gonzales',
            'bpm'=>'145',
            'artist_id'=>$banya->id,
            'game_version_id'=>$zero->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([3]);
        $song = Song::create([
            'id'=>'C14',
            'title'=>'Chung Hwa Ban Jeom',
            'bpm'=>'149.5',
            'artist_id'=>$louis->id,
            'game_version_id'=>$zero->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([3]);
        $song = Song::create([
            'id'=>'C41',
            'title'=>'Love is a Danger Zone 2: Try to B.P.M',
            'bpm'=>'140~169',
            'artist_id'=>$banya->id,
            'game_version_id'=>$zero->id,
            'type_id'=>$remixType->id
        ]);
        $song->channels()->attach([3, 11]);
    }
}
