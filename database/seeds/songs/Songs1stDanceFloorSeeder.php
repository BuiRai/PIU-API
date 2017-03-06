<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;
use App\Type;
use App\Channel;

class Songs1stDanceFloorSeeder extends Seeder
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
        $firstDF = GameVersion::where('name', 'The 1st Dance Floor')->first();

        $song = Song::create([
            'id'=>'101',
            'title'=>'Ignition Starts',
            'bpm'=>'146',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$firstDF->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([1]);
        $song = Song::create([
            'id'=>'102',
            'title'=>'Hypnosis',
            'bpm'=>'180',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$firstDF->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([1]);
        $song = Song::create([
            'id'=>'109',
            'title'=>'Funky Tonight',
            'bpm'=>'105',
            'artist_id'=>$clon->id,
            'game_version_id'=>$firstDF->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([1]);
        $song = Song::create([
            'id'=>'112',
            'title'=>'Another Truth',
            'bpm'=>'136',
            'artist_id'=>$novasonic->id,
            'game_version_id'=>$firstDF->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([1]);
    }
}
