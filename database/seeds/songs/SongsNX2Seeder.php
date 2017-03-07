<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;
use App\Type;
use App\Channel;

class SongsNX2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Artists
        $ziGZaG = Artist::where('name', 'ZiGZaG')->first();
        $elpis = Artist::where('name', 'Elpis')->first();
        $oscillatorX = Artist::where('name', 'OscillatorX')->first();
        $bigMetra = Artist::where('name', 'Big metra')->first();
        $ninaPilots = Artist::where('name', 'Nina Pilots')->first();
        $pxndx = Artist::where('name', 'PXNDX')->first();
        $bigMetra = Artist::where('name', 'Big metra')->first();
        $msgoon = Artist::where('name', 'msgoon')->first();
        $banyaProduction = Artist::where('name', 'Banya Production')->first();
        $banya = Artist::where('name', 'BanYa')->first();
        $ninaPilotsPXNDX = Artist::where('name', 'Nina Pilots & PXNDX')->first();
        $vassline = Artist::where('name', 'Vassline')->first();
        $yahpp = Artist::where('name', 'Yahpp')->first();

        // Types
        $shortType = Type::find(1);
        $normalType = Type::find(2);
        $remixType = Type::find(3);
        $fullType = Type::find(4);

        // Game Version
        $nx2 = GameVersion::where('name', 'NX 2 / Next Xenesis')->first();

        $song = Song::create([
            'id'=>'E01',
            'title'=>'Solitary 1.5',
            'bpm'=>'136',
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$nx2->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'E02',
            'title'=>'Beat the Ghost',
            'bpm'=>'124',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$nx2->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'E03',
            'title'=>'Caprice of Otada',
            'bpm'=>'160',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$nx2->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'E04',
            'title'=>'Money',
            'bpm'=>'130',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$nx2->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'E05',
            'title'=>'Monkey Fingers 2',
            'bpm'=>'180',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$nx2->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'E12',
            'title'=>'Faster Z',
            'bpm'=>'162',
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$nx2->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'E13',
            'title'=>'Pumptris Quattro',
            'bpm'=>'153',
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$nx2->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'E23',
            'title'=>'Guitar Man',
            'bpm'=>'120',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$nx2->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'E24',
            'title'=>'Higgledy Piggledy',
            'bpm'=>'154',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$nx2->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'E25',
            'title'=>'Jam O Beat',
            'bpm'=>'120',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$nx2->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'E27',
            'title'=>'Dance All Night',
            'bpm'=>'140',
            'artist_id'=>$oscillatorX->id,
            'game_version_id'=>$nx2->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'E28',
            'title'=>'Dance Vibrations',
            'bpm'=>'130',
            'artist_id'=>$elpis->id,
            'game_version_id'=>$nx2->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'E29',
            'title'=>'Energizer',
            'bpm'=>'151.5',
            'artist_id'=>$ziGZaG->id,
            'game_version_id'=>$nx2->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'E50',
            'title'=>'BanYa-P Guitar Remix',
            'bpm'=>'120',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$nx2->id,
            'type_id'=>$remixType->id
        ]);
        $song->channels()->attach([4, 11]);
        $song = Song::create([
            'id'=>'E52',
            'title'=>'Money Fingers',
            'bpm'=>'170',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$nx2->id,
            'type_id'=>$remixType->id
        ]);
        $song->channels()->attach([4, 11]);
        $song = Song::create([
            'id'=>'E928',
            'title'=>'Extra BanYa Remix',
            'bpm'=>'200',
            'artist_id'=>$banya->id,
            'game_version_id'=>$nx2->id,
            'type_id'=>$remixType->id
        ]);
        $song->channels()->attach([4, 11]);
    }
}
