<?php

use Illuminate\Database\Seeder;
use App\GameVersion;
use Faker\Factory as Faker;

class GameVersionTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $faker = Faker::create();

    for ($i = 0 ; $i < 3 ; $i++) {
      GameVersion::create([
        'name' => $faker->word(),
        'launch_year' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'banner_image' => $faker->imageUrl()
      ]);
    }
  }
}
