<?php

use Illuminate\Database\Seeder;
use App\TypeSong;

class TypesSongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeSong::create(['name' => 'Short']);
        TypeSong::create(['name' => 'Normal']);
        TypeSong::create(['name' => 'Remix']);
        TypeSong::create(['name' => 'Full']);
    }
}
