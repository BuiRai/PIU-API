<?php

use App\Artist;
use Faker\Factory;
use Carbon\Carbon;

class ArtistTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    private $artist;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    public function testDestroyArtist()
    {
        $this->createArtist();
        $artistToCheck = $this->artist;
        $this->artist->delete();
        $this->tester->dontSeeRecord('artists', [
            'id' => $artistToCheck->id,
            'name' => $artistToCheck->name
        ]);
    }

    // tests
    public function testSaveArtist()
    {
        $faker = Factory::create('App\Artist');
        $name = $faker->name;
        $created_at = Carbon::now();
        $updated_at = Carbon::now();

        $this->tester->haveRecord(
            'App\Artist',
            ['name' => $name, 'created_at' => $created_at, 'updated_at' => $updated_at ]
        );

        $this->tester->seeRecord(
            'artists',
            ['name' => $name, 'created_at' => $created_at, 'updated_at' => $updated_at ]
        );
    }

    /**
     * =========================================================================
     * =========================================================================
     *     Private Methods
     * =========================================================================
     * =========================================================================
     */

    private function createArtist()
    {
        $faker = Factory::create('App\Artist');
        $name = $faker->name;
        $this->artist = $this->tester->haveRecord(
            'App\Artist',
            ['name' => $name]
        );
    }
}
