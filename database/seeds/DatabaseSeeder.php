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
        $this->call(UsersTableSeeder::class);
        $this->call(ArtistsTableSeeder::class);
        $this->call(GameVersionTableSeeder::class);
        $this->call(TypesSongsTableSeeder::class);
        $this->call(ChannelsTableSeeder::class);
        $this->call(StepmakerTableSeeder::class);
        $this->call(StylesTableSeeder::class);
        $this->call(ChartTypesTableSeeder::class);
        $this->call(SongsTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
    }
}
