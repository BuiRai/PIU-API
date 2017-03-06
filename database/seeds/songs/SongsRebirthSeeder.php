<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;
use App\Type;
use App\Channel;

class SongsRebirthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Artists
        $banya = Artist::where('name', 'BanYa')->first();

        // Types
        $shortType = Type::find(1);
        $normalType = Type::find(2);
        $remixType = Type::find(3);
        $fullType = Type::find(4);

        // Gme version
        $rebirth = GameVersion::where('name', 'The Rebirth')->first();

        $song = Song::create([
            'id'=>'701',
            'title'=>'Dr. M',
            'bpm'=>'145',
            'artist_id'=>$banya->id,
            'game_version_id'=>$rebirth->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'702',
            'title'=>'Emperor',
            'bpm'=>'150',
            'artist_id'=>$banya->id,
            'game_version_id'=>$rebirth->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'703',
            'title'=>'Get Your Groove On',
            'bpm'=>'96',
            'artist_id'=>$banya->id,
            'game_version_id'=>$rebirth->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'704',
            'title'=>'Love is a Danger Zone',
            'bpm'=>'140',
            'artist_id'=>$banya->id,
            'game_version_id'=>$rebirth->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'705',
            'title'=>'Maria',
            'bpm'=>'136',
            'artist_id'=>$banya->id,
            'game_version_id'=>$rebirth->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'706',
            'title'=>'Mission Possible',
            'bpm'=>'124',
            'artist_id'=>$banya->id,
            'game_version_id'=>$rebirth->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'707',
            'title'=>'118',
            'bpm'=>'My Way',
            'artist_id'=>$banya->id,
            'game_version_id'=>$rebirth->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'708',
            'title'=>'Point Break',
            'bpm'=>'92',
            'artist_id'=>$banya->id,
            'game_version_id'=>$rebirth->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'709',
            'title'=>'Street Show Down',
            'bpm'=>'124',
            'artist_id'=>$banya->id,
            'game_version_id'=>$rebirth->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'710',
            'title'=>'Top City',
            'bpm'=>'110.72',
            'artist_id'=>$banya->id,
            'game_version_id'=>$rebirth->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'711',
            'title'=>'Winter',
            'bpm'=>'168',
            'artist_id'=>$banya->id,
            'game_version_id'=>$rebirth->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'712',
            'title'=>'W\' the Wisp',
            'bpm'=>'210',
            'artist_id'=>$banya->id,
            'game_version_id'=>$rebirth->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'713',
            'title'=>'Till the End of Time',
            'bpm'=>'140',
            'artist_id'=>$banya->id,
            'game_version_id'=>$rebirth->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'714',
            'title'=>'Oy Oy Oy',
            'bpm'=>'148',
            'artist_id'=>$banya->id,
            'game_version_id'=>$rebirth->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'715',
            'title'=>'We Will Meet Again',
            'bpm'=>'118',
            'artist_id'=>$banya->id,
            'game_version_id'=>$rebirth->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'716',
            'title'=>'Miss\'s Story',
            'bpm'=>'111',
            'artist_id'=>$banya->id,
            'game_version_id'=>$rebirth->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'717',
            'title'=>'Set Me Up',
            'bpm'=>'120',
            'artist_id'=>$banya->id,
            'game_version_id'=>$rebirth->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'718',
            'title'=>'Dance With Me',
            'bpm'=>'122',
            'artist_id'=>$banya->id,
            'game_version_id'=>$rebirth->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'735',
            'title'=>'Vook',
            'bpm'=>'184',
            'artist_id'=>$banya->id,
            'game_version_id'=>$rebirth->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'736',
            'title'=>'Csikos Post',
            'bpm'=>'180',
            'artist_id'=>$banya->id,
            'game_version_id'=>$rebirth->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
    }
}
