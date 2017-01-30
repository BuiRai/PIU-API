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
    }
}
