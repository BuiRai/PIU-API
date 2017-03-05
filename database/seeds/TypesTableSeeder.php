<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create(['name' => 'Short']);
        Type::create(['name' => 'Normal']);
        Type::create(['name' => 'Remix']);
        Type::create(['name' => 'Full']);
    }
}
