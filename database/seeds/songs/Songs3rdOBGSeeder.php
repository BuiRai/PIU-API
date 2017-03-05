<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;

class Songs3rdOBGSeeder extends Seeder
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

        // Game versions
        $thirdOBG = GameVersion::where('name', 'The O.B.G. The 3rd Dance Floor')->first();

        Song::create([
            'id'=>'301',
            'title'=>'Final Audition 2',
            'bpm'=>'130',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$thirdOBG->id
        ]);
        Song::create([
            'id'=>'302',
            'title'=>'Naissance',
            'bpm'=>'135.5',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$thirdOBG->id
        ]);
        Song::create([
            'id'=>'303',
            'title'=>'Turkey March',
            'bpm'=>'150',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$thirdOBG->id
        ]);
        Song::create([
            'id'=>'306',
            'title'=>'A Nightmare',
            'bpm'=>'120',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$thirdOBG->id
        ]);
        Song::create([
            'id'=>'307',
            'title'=>'Close Your Eyes',
            'bpm'=>'105',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$thirdOBG->id
        ]);
        Song::create([
            'id'=>'308',
            'title'=>'Free Style',
            'bpm'=>'99',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$thirdOBG->id
        ]);
        Song::create([
            'id'=>'309',
            'title'=>'Midnight Blue',
            'bpm'=>'80',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$thirdOBG->id
        ]);
        Song::create([
            'id'=>'310',
            'title'=>'She Likes Pizza',
            'bpm'=>'229.6',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$thirdOBG->id
        ]);
        Song::create([
            'id'=>'311',
            'title'=>'Pumping Up',
            'bpm'=>'135',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$thirdOBG->id
        ]);
        Song::create([
            'id'=>'312',
            'title'=>'Don\'t Bother Me',
            'bpm'=>'110',
            'artist_id'=>$tashannie->id,
            'game_version_id'=>$thirdOBG->id
        ]);
    }
}
