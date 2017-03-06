<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;
use App\Type;
use App\Channel;

class SongsPerfectCollectionSeeder extends Seeder
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
        $perfectCollection = GameVersion::where('name', 'Perfect Collection')->first();

        $song = Song::create([
            'id'=>'501',
            'title'=>'Pump Jump',
            'bpm'=>'106',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$perfectCollection->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([1]);
        $song = Song::create([
            'id'=>'502',
            'title'=>'N',
            'bpm'=>'N',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$perfectCollection->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([1]);
        $song = Song::create([
            'id'=>'503',
            'title'=>'Rolling Christmas',
            'bpm'=>'142',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$perfectCollection->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([1]);
        $song = Song::create([
            'id'=>'504',
            'title'=>'All I Want For X-mas',
            'bpm'=>'138',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$perfectCollection->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([1]);
        $song = Song::create([
            'id'=>'505',
            'title'=>'Beethoven Virus',
            'bpm'=>'162',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$perfectCollection->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([1]);
        $song = Song::create([
            'id'=>'516',
            'title'=>'Slam',
            'bpm'=>'131.99',
            'artist_id'=>$novasonic->id,
            'game_version_id'=>$perfectCollection->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([1]);
    }
}
