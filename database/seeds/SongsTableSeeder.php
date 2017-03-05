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
    $this->call(SongsNXASeeder::class);
    $this->call(SongsNX2Seeder::class);
    $this->call(SongsNXSeeder::class);
    $this->call(SongsZeroSeeder::class);
    $this->call(SongsExceed2Seeder::class);
    $this->call(SongsExceedSeeder::class);
    $this->call(SongsPremiere3Seeder::class);
    $this->call(SongsRebirthSeeder::class);
    $this->call(SongsExtraSeeder::class);
    $this->call(SongsPerfectCollectionSeeder::class);
    $this->call(Songs3rdSESeeder::class);
    $this->call(Songs3rdOBGSeeder::class);
    $this->call(Songs2ndDanceFloorSeeder::class);
    $this->call(Songs1stDanceFloorSeeder::class);

  }
}
