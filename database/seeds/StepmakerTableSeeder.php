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
    Stepmaker::create(['username' => 'Unknow Stepmaker']); // 1
    Stepmaker::create(['username' => 'BPM']); // 2
    Stepmaker::create(['username' => 'Minami']); // 3
    Stepmaker::create(['username' => 'Windforce']); // 4
    Stepmaker::create(['username' => 'Osing']); // 5
    Stepmaker::create(['username' => 'EXC']); // 6
    Stepmaker::create(['username' => 'Huge']); // 7
    Stepmaker::create(['username' => 'HP']);  // 8
    Stepmaker::create(['username' => 'Bannie']); // 9
    Stepmaker::create(['username' => 'Nimgo']); // 10

  }
}
