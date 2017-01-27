<?php

use Illuminate\Database\Seeder;
use App\Song;
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

        for ($i = 0 ; $i < 10 ; $i++) {
            Song::create([
                'id'=>$faker->word(),
                'title'=>$faker->word(),
                'artist'=>$faker->word(),
                'bpm'=>$faker->numberBetween(150,220),
                'bannerImage'=>$faker->imageUrl()

            ]);
        }
    }
}
