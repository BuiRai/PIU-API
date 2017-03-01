<?php

use Illuminate\Database\Seeder;
use App\Stepmaker;

class StepmakerTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    Stepmaker::create(['username' => 'Unknow Stepmaker']);
    Stepmaker::create(['username' => 'BPM']);
    Stepmaker::create(['username' => 'Minami']);
    Stepmaker::create(['username' => 'Windforce']);
    Stepmaker::create(['username' => 'Osing']);
    Stepmaker::create(['username' => 'EXC']);
    Stepmaker::create(['username' => 'Huge']);
    Stepmaker::create(['username' => 'HP']);
    Stepmaker::create(['username' => 'Bannie']);
    Stepmaker::create(['username' => 'Nimgo']);

  }
}
