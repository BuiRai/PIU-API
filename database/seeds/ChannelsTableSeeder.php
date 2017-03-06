<?php

use Illuminate\Database\Seeder;
use App\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create(['name' => '1st ~ Perfect Collection']); // 1
        Channel::create(['name' => 'Extra ~ Prex 3']); // 2
        Channel::create(['name' => 'Exceed ~ Zero']); // 3
        Channel::create(['name' => 'NX ~ NXA']); // 4
        Channel::create(['name' => 'Fiesta']); // 5
        Channel::create(['name' => 'Fiesta Ex']); // 6
        Channel::create(['name' => 'Fiesta 2']); // 7
        Channel::create(['name' => 'Prime']); // 8
        Channel::create(['name' => 'Prime 2']); // 9
        Channel::create(['name' => 'Full Song']); // 10
        Channel::create(['name' => 'Remix']); // 11
        Channel::create(['name' => 'Shortcut']); // 12
    }
}
