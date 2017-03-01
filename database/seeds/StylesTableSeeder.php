<?php

use Illuminate\Database\Seeder;
use App\Style;

class StylesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Style::create(['style'=>'single']);
    Style::create(['style'=>'double']);
    Style::create(['style'=>'single perfomance']);
    Style::create(['style'=>'double perfomance']);
    Style::create(['style'=>'half double']);
  }
}
