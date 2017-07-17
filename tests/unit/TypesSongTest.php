<?php

use App\TypeSong;
use Carbon\Carbon;
use Faker\Factory;

class TypesSongTest extends \Codeception\Test\Unit
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
    public function testSaveTypeSong()
    {
        $faker = Factory::create('App\TypeSong');
        $name = $faker->word;

        $typeSong = new TypeSong([ 'name' => $name ]);
        $typeSong->save();

        $this->tester->seeRecord(
            'types_songs', [ 'name' => $name ]
        );
    }
}
