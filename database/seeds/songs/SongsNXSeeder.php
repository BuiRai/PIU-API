<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;

class SongsNXSeeder extends Seeder
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
        $banya = Artist::where('name', 'Banya')->first();
        $ninaPilotsPXNDX = Artist::where('name', 'Nina Pilots & PXNDX')->first();
        $vassline = Artist::where('name', 'Vassline')->first();
        $yahpp = Artist::where('name', 'Yahpp')->first();

        // Game Version
        $nx = GameVersion::where('name', 'NX / New Xenesis')->first();

        Song::create([
            'id'=>'D01',
            'title'=>'Witch Doctor #1',
            'bpm'=>'122',
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$nx->id
        ]);
        Song::create([
            'id'=>'D02',
            'title'=>'Arch of Darkness',
            'bpm'=>'135.9',
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$nx->id
        ]);
        Song::create([
            'id'=>'D03',
            'title'=>'Chimera',
            'bpm'=>'210',
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$nx->id
        ]);
        Song::create([
            'id'=>'D14',
            'title'=>'2006 Love Song',
            'bpm'=>'96',
            'artist_id'=>$banya->id,
            'game_version_id'=>$nx->id
        ]);
        Song::create([
            'id'=>'D15',
            'title'=>'Do You Know That -Old School',
            'bpm'=>'120',
            'artist_id'=>$banya->id,
            'game_version_id'=>$nx->id
        ]);
        Song::create([
            'id'=>'D16',
            'title'=>'Gun Rock',
            'bpm'=>'104',
            'artist_id'=>$banya->id,
            'game_version_id'=>$nx->id
        ]);
        Song::create([
            'id'=>'D17',
            'title'=>'Bullfighter\'s Song',
            'bpm'=>'168',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$nx->id
        ]);
        Song::create([
            'id'=>'D18',
            'title'=>'Ugly Dee',
            'bpm'=>'92',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$nx->id
        ]);
        Song::create([
            'id'=>'D28',
            'title'=>'Final Audition Episode 2-1',
            'bpm'=>'170',
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$nx->id
        ]);
        Song::create([
            'id'=>'D30',
            'title'=>'Final Audition Episode 2-2',
            'bpm'=>'200',
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$nx->id
        ]);
        Song::create([
            'id'=>'D34',
            'title'=>'Wi-Ex-Doc-Va',
            'bpm'=>'195',
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$nx->id
        ]);
        Song::create([
            'id'=>'D35',
            'title'=>'Bemera',
            'bpm'=>'210',
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$nx->id
        ]);
        Song::create([
            'id'=>'D41',
            'title'=>'Love is a Danger Zone 2 ',
            'bpm'=>'160~162',
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$nx->id
        ]);
        Song::create([
            'id'=>'D42',
            'title'=>'Beat of the War 2',
            'bpm'=>'120~190',
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$nx->id
        ]);
        Song::create([
            'id'=>'DC04',
            'title'=>'Love is a Danger Zone 2',
            'bpm'=>'162',
            'artist_id'=>$banya->id,
            'game_version_id'=>$nx->id
        ]);
    }
}
