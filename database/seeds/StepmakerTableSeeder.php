<?php

use Illuminate\Database\Seeder;
use App\Stepmaker;
use Faker\Factory as Faker;

class StepmakerTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $faker = Faker::create();

    // for ($i=0 ; $i < 5 ; $i++) {
    // 	Stepmaker::create([
    // 		'username' => $faker->word()
    // 	]);
    // }

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
