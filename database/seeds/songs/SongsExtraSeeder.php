<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;
use App\Type;
use App\Channel;

class SongsExtraSeeder extends Seeder
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
        $extra = GameVersion::where('name', 'Extra')->first();

        $song = Song::create([
            'id'=>'911',
            'title'=>'Chicken Wing',
            'bpm'=>'200',
            'artist_id'=>$banya->id,
            'game_version_id'=>$extra->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
        $song = Song::create([
            'id'=>'922',
            'title'=>'Final Audition Episode 1',
            'bpm'=>'189',
            'artist_id'=>$banya->id,
            'game_version_id'=>$extra->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([2]);
    }
}
