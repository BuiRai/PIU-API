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
        Channel::create(['name' => '1st ~ Perfect Collection']);
        Channel::create(['name' => 'Extra ~ Prex 3']);
        Channel::create(['name' => 'Exceed ~ Zero']);
        Channel::create(['name' => 'NX ~ NXA']);
        Channel::create(['name' => 'Fiesta']);
        Channel::create(['name' => 'Fiesta Ex']);
        Channel::create(['name' => 'Fiesta 2']);
        Channel::create(['name' => 'Prime']);
        Channel::create(['name' => 'Prime 2']);
        //
        Channel::create(['name' => 'Full Song']);
        Channel::create(['name' => 'Remix']);
        Channel::create(['name' => 'Shortcut']);
    }
}
