<?php

use Illuminate\Database\Seeder;
use App\Level;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::truncate();
        // $this->call(LevelsPrime2Seeder::class);
        // $this->call(LevelsPrimeSeeder::class);
        $this->call(LevelsFiesta2Seeder::class);
        $this->call(LevelsFiestaExSeeder::class);
        $this->call(LevelsFiestaSeeder::class);
        $this->call(LevelsNXASeeder::class);
        $this->call(LevelsNX2Seeder::class);
        $this->call(LevelsNXSeeder::class);
        $this->call(LevelsZeroSeeder::class);
        $this->call(LevelsExceed2Seeder::class);
        $this->call(LevelsExceedSeeder::class);
        $this->call(LevelsPremiere3Seeder::class);
        $this->call(LevelsRebirthSeeder::class);
        $this->call(LevelsExtraSeeder::class);
        $this->call(LevelsPerfectCollectionSeeder::class);
        $this->call(Levels3rdSESeeder::class);
        $this->call(Levels3rdOBGSeeder::class);
        $this->call(Levels2ndDanceFloorSeeder::class);
        $this->call(Levels1stDanceFloorSeeder::class);
    }
}
