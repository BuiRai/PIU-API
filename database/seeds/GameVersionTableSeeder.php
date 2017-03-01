<?php

use Illuminate\Database\Seeder;
use App\GameVersion;

class GameVersionTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    $date = new DateTime();

    GameVersion::create([
      'name' => 'The 1st Dance Floor',
      'launch_year' => $date->setDate(1999, 9, 20)
    ]);
    GameVersion::create([
      'name' => 'The 2nd Dance Floor',
      'launch_year' => $date->setDate(1999, 12, 27)
    ]);
    GameVersion::create([
      'name' => 'The O.B.G. The 3rd Dance Floor',
      'launch_year' => $date->setDate(2000, 5, 7)
    ]);
    GameVersion::create([
      'name' => 'The O.B.G. The Season Evolution Dance Floor',
      'launch_year' => $date->setDate(2000, 9, 3)
    ]);
    GameVersion::create([
      'name' => 'Perfect Collection',
      'launch_year' => $date->setDate(2000, 12, 18)
    ]);
    GameVersion::create([
      'name' => 'Extra',
      'launch_year' => $date->setDate(2001, 3, 21)
    ]);
    GameVersion::create([
      'name' => 'The Premiere',
      'launch_year' => $date->setDate(2001, 6, 1)
    ]);
    GameVersion::create([
      'name' => 'The Prex',
      'launch_year' => $date->setDate(2001, 11, 1)
    ]);
    GameVersion::create([
      'name' => 'The Rebirth',
      'launch_year' => $date->setDate(2002, 3, 1)
    ]);
    GameVersion::create([
      'name' => 'The Premiere 2',
      'launch_year' => $date->setDate(2002, 2, 1)
    ]);
    GameVersion::create([
      'name' => 'The Prex 2',
      'launch_year' => $date->setDate(2002, 11, 1)
    ]);
    GameVersion::create([
      'name' => 'The Premiere 3',
      'launch_year' => $date->setDate(2003, 5, 1)
    ]);
    GameVersion::create([
      'name' => 'The Prex 3',
      'launch_year' => $date->setDate(2003, 10, 1)
    ]);
    GameVersion::create([
      'name' => 'Exceed',
      'launch_year' => $date->setDate(2004, 4, 1)
    ]);
    GameVersion::create([
      'name' => 'Exceed 2',
      'launch_year' => $date->setDate(2004, 12, 1)
    ]);
    GameVersion::create([
      'name' => 'Zero',
      'launch_year' => $date->setDate(2006, 1, 28)
    ]);
    GameVersion::create([
      'name' => 'NX / New Xenesis',
      'launch_year' => $date->setDate(2006, 11, 1)
    ]);
    GameVersion::create([
      'name' => 'Pro',
      'launch_year' => $date->setDate(2007, 6, 1)
    ]);
    GameVersion::create([
      'name' => 'NX 2 / Next Xenesis',
      'launch_year' => $date->setDate(2007, 12, 1)
    ]);
    GameVersion::create([
      'name' => 'NXA / NX Absolute',
      'launch_year' => $date->setDate(2008,11, 1)
    ]);
    GameVersion::create([
      'name' => 'Fiesta',
      'launch_year' => $date->setDate(2010, 10, 1)
    ]);
    GameVersion::create([
      'name' => 'Pro 2',
      'launch_year' => $date->setDate(2010, 7, 1)
    ]);
    GameVersion::create([
      'name' => 'Fiesta EX',
      'launch_year' => $date->setDate(2011, 3, 1)
    ]);
    GameVersion::create([
      'name' => 'Fiesta 2',
      'launch_year' => $date->setDate(2012, 11, 24)
    ]);
    GameVersion::create([
      'name' => 'Infinity',
      'launch_year' => $date->setDate(2013, 3, 1)
    ]);
    GameVersion::create([
      'name' => 'Prime',
      'launch_year' => $date->setDate(2014, 11, 1)
    ]);
    GameVersion::create([
      'name' => 'Prime 2',
      'launch_year' => $date->setDate(2016, 12, 1)
    ]);

  }
}
