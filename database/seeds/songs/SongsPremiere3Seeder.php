<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;
use App\Type;
use App\Channel;

class SongsPremiere3Seeder extends Seeder
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
        $premiere3 = GameVersion::where('name', 'The Premiere 3')->first();

        $song = Song::create([
            'id'=>'802',
            'title'=>'Bee',
            'bpm'=>'160',
            'artist_id'=>$banya->id,
            'game_version_id'=>$premiere3->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'807',
            'title'=>'D Gang',
            'bpm'=>'150',
            'artist_id'=>$banya->id,
            'game_version_id'=>$premiere3->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'811',
            'title'=>'Hello',
            'bpm'=>'140',
            'artist_id'=>$banya->id,
            'game_version_id'=>$premiere3->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'820',
            'title'=>'Beat of the War',
            'bpm'=>'140~202',
            'artist_id'=>$banya->id,
            'game_version_id'=>$premiere3->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'826',
            'title'=>'Come To Me',
            'bpm'=>'100~107',
            'artist_id'=>$banya->id,
            'game_version_id'=>$premiere3->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
    }
}
