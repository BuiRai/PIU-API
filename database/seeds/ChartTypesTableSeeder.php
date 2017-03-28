<?php

use Illuminate\Database\Seeder;
use App\ChartType;

class ChartTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChartType::create(['name'=>'Andamiro Official Step', 'abbreviation'=>'AM']);
        ChartType::create(['name'=>'User Custom Step', 'abbreviation'=>'UCS']);
    }
}
