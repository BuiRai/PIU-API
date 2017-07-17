<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;
use App\TypeSong;
use App\Channel;

class SongsNXASeeder extends Seeder
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
        $ninaPilotsPXNDX = Artist::where('name', 'Nina Pilots & PXNDX')->first();
        $vassline = Artist::where('name', 'Vassline')->first();
        $yahpp = Artist::where('name', 'Yahpp')->first();

        // Types
        $shortType = TypeSong::find(1);
        $normalType = TypeSong::find(2);
        $remixType = TypeSong::find(3);
        $fullType = TypeSong::find(4);

        // Game Version
        $nxa = GameVersion::where('name', 'NXA / NX Absolute')->first();

        $song = Song::create([
            'id'=>'F01',
            'title'=>'Blaze Emotion',
            'bpm'=>'170',
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'F02',
            'title'=>'Cannon X.1',
            'bpm'=>'185',
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'F03',
            'title'=>'Chopsticks Challenge',
            'bpm'=>'128',
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'F13',
            'title'=>'Panuelito Rojo',
            'bpm'=>'98',
            'artist_id'=>$bigMetra->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'F14',
            'title'=>'Procedimientos Para Llegar A Un Común Acuerdo',
            'bpm'=>'160',
            'artist_id'=>$pxndx->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'F15',
            'title'=>'Digan Lo Que Digan',
            'bpm'=>'162',
            'artist_id'=>$ninaPilots->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'F22',
            'title'=>'The People Didn\'t Know',
            'bpm'=>'134',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'F23',
            'title'=>'DJ Otada',
            'bpm'=>'180',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'F24',
            'title'=>'K.O.A -Alice in Wonderworld',
            'bpm'=>'156',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'F25',
            'title'=>'My Dreams',
            'bpm'=>'136',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'F26',
            'title'=>'Toccata',
            'bpm'=>'104',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'F28',
            'title'=>'Dawn of the Apocalypse',
            'bpm'=>'???',
            'artist_id'=>$vassline->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'F29',
            'title'=>'Final Audition Episode 2-X',
            'bpm'=>'170',
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$normalType->id
        ]);
        $song->channels()->attach([4]);
        $song = Song::create([
            'id'=>'F31',
            'title'=>'The People Didn\'t Know "Pumping Up"',
            'bpm'=>'134',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$remixType->id
        ]);
        $song->channels()->attach([4, 11]);
        $song = Song::create([
            'id'=>'F33',
            'title'=>'Caprice of DJ Otada',
            'bpm'=>'180',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$remixType->id
        ]);
        $song->channels()->attach([4, 11]);
        $song = Song::create([
            'id'=>'F34',
            'title'=>'Dr. KOA',
            'bpm'=>'156',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$remixType->id
        ]);
        $song->channels()->attach([4, 11]);
        $song = Song::create([
            'id'=>'F37',
            'title'=>'Nina Pxndx Mix',
            'bpm'=>'160',
            'artist_id'=>$ninaPilotsPXNDX->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$remixType->id
        ]);
        $song->channels()->attach([4, 11]);
        $song = Song::create([
            'id'=>'F38',
            'title'=>'Big Metra Remix',
            'bpm'=>'105',
            'artist_id'=>$bigMetra->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$remixType->id
        ]);
        $song->channels()->attach([4, 11]);
        $song = Song::create([
            'id'=>'F43',
            'title'=>'Turkey Virus',
            'bpm'=>'150~162',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$remixType->id
        ]);
        $song->channels()->attach([4, 11]);
        $song = Song::create([
            'id'=>'F44',
            'title'=>'msgoon RMX pt. 1',
            'bpm'=>'120',
            'artist_id'=>$msgoon->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$remixType->id
        ]);
        $song->channels()->attach([4, 11]);
        $song = Song::create([
            'id'=>'F46',
            'title'=>'msgoon RMX pt. 3',
            'bpm'=>'168',
            'artist_id'=>$msgoon->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$remixType->id
        ]);
        $song->channels()->attach([4, 11]);
        $song = Song::create([
            'id'=>'F53',
            'title'=>'Panuelito Rojo',
            'bpm'=>'98',
            'artist_id'=>$bigMetra->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$fullType->id
        ]);
        $song->channels()->attach([4, 10]);
        $song = Song::create([
            'id'=>'F54',
            'title'=>'Procedimientos Para Llegar A Un Común Acuerdo',
            'bpm'=>'160',
            'artist_id'=>$pxndx->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$fullType->id
        ]);
        $song->channels()->attach([4, 10]);
        $song = Song::create([
            'id'=>'F59',
            'title'=>'Digan Lo Que Digan',
            'bpm'=>'162',
            'artist_id'=>$ninaPilots->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$fullType->id
        ]);
        $song->channels()->attach([4, 10]);
        $song = Song::create([
            'id'=>'F60',
            'title'=>'Trato De No Trabarme',
            'bpm'=>'105',
            'artist_id'=>$bigMetra->id,
            'game_version_id'=>$nxa->id,
            'type_song_id'=>$fullType->id
        ]);
        $song->channels()->attach([4, 10]);
    }
}
