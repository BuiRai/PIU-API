<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Style;
use App\Level;
use App\Stepmaker;
use Faker\Factory as Faker;

class LevelsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $faker = Faker::create();

    $totalSongs = Song::all()->count();
    $totalStyles = Style::all()->count();
    $totalStepmakers = Stepmaker::all()->count();

    // for ($i=0; $i < 10; $i++) {
    //     $song = Song::inRandomOrder()->get()->first();
    // 	Level::create([
    // 		'level' => $faker->numberBetween(1,25),
    // 		'song_id' => $song->id,
    // 		'stepmaker_id' => $faker->numberBetween(1,$totalStepmakers),
    // 		'style_id' => $faker->numberBetween(1,$totalStyles)
    // 	]);
    // }
  }
}
