<?php

use Illuminate\Database\Seeder;
use App\Artist;
use Faker\Factory as Faker;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0 ; $i < 5 ; $i++){
            Artist::create([
                'name'=>$faker->word()
            ]);
        }
    }
}
