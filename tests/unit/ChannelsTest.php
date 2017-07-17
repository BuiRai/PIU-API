<?php

use App\Channel;
use Carbon\Carbon;
use Faker\Factory;

class ChannelsTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    protected $channel;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSaveChannel()
    {
        $faker = Factory::create('App\Channel');
        $name = $faker->name;

        $channel = new Channel(['name' => $name]);
        $channel->save();

        $this->tester->seeRecord(
            'channels', ['name' => $name]
        );
    }

    public function testDestroyChannel()
    {
        $this->createChannel();
        $channelToCheck = $this->channel;
        $this->channel->delete();
        $this->tester->dontSeeRecord('channels', [
            'id' => $channelToCheck->id,
            'name' => $channelToCheck->name
        ]);
    }

    /**
     * =========================================================================
     * =========================================================================
     *     Private Methods
     * =========================================================================
     * =========================================================================
     */

    private function createChannel()
    {
        $faker = Factory::create('App\Channel');
        $name = $faker->name;
        $this->channel = $this->tester->haveRecord(
            'App\Channel',
            ['name' => $name]
        );
    }
}
