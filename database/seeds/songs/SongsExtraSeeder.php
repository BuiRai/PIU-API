<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;

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

        // Gme version
        $extra = GameVersion::where('name', 'Extra')->first();

        Song::create([
            'id'=>'911',
            'title'=>'Chicken Wing',
            'bpm'=>'200',
            'artist_id'=>$banya->id,
            'game_version_id'=>$extra->id
        ]);
        Song::create([
            'id'=>'922',
            'title'=>'Final Audition Episode 1',
            'bpm'=>'189',
            'artist_id'=>$banya->id,
            'game_version_id'=>$extra->id
        ]);
    }
}
