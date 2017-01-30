<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;
use Faker\Factory as Faker;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $totalArtists = Artist::all()->count();
        $totalGameVersions = GameVersion::all()->count();

        for ($i = 0 ; $i < 10 ; $i++) {
            Song::create([
                'id'=>$faker->word(),
                'title'=>$faker->word(),
                'bpm'=>$faker->numberBetween(150,220),
                'bannerImage'=>$faker->imageUrl(),
                'artist_id' => $faker->numberBetween(1, $totalArtists),
                'game_version_id' => $faker->numberBetween(1, $totalGameVersions)
            ]);
        }
    }
}
