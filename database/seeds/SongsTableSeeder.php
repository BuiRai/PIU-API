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
    $this->call(SongsPrime2Seeder::class);
    $this->call(SongsPrimeSeeder::class);
  }
}
