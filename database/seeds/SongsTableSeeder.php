<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;

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
    $this->call(SongsFiesta2Seeder::class);
    $this->call(SongsFiestaExSeeder::class);
    $this->call(SongsFiestaSeeder::class);
  }
}
