<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(ArtistsTableSeeder::class);
        $this->call(GameVersionTableSeeder::class);
        $this->call(SongsTableSeeder::class);
        $this->call(StepmakerTableSeeder::class);
        $this->call(StylesTableSeeder::class);
        $this->call(LevelsTableSeeder::class);

        // DROP TABLE migrations;
        // DROP TABLE levels;
        // DROP TABLE songs;
        // DROP TABLE password_resets;
        // DROP TABLE artists;
        // DROP TABLE users;
        // DROP TABLE gameversions;
        // DROP TABLE stepmakers;
        // DROP TABLE styles;
    }
}
