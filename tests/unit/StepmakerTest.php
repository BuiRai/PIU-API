<?php

use App\Stepmaker;
use Faker\Factory;
use Carbon\Carbon;

class StepmakerTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSaveStepmaker()
    {
        $faker = Factory::create('App\Stepmaker');
        $username = $faker->name;
        $created_at = Carbon::now();
        $updated_at = Carbon::now();

        $this->tester->haveRecord(
            'App\Stepmaker',
            ['username' => $username, 'created_at' => $created_at, 'updated_at' => $updated_at ]
        );

        $this->tester->seeRecord(
            'stepmakers',
            ['username' => $username, 'created_at' => $created_at, 'updated_at' => $updated_at ]
        );
    }
}
