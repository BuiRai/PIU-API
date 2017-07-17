<?php

use App\GameVersion;
use Carbon\Carbon;
use Faker\Factory;

class GameVersionsTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    protected $gameVersion;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests to save a gameversion
    public function testSaveGameVersion()
    {
        $faker = Factory::create('App\GameVersion');
        $name = $faker->name;
        $launchYear = Carbon::now()->toDateString();
        $bannerImage = $faker->imageUrl($width = 640, $height = 480);

        $gameVersion = new GameVersion([
            'name' => $name,
            'launch_year' => $launchYear,
            'banner_image' => $bannerImage,
        ]);
        $gameVersion->save();

        $this->tester->seeRecord(
            'gameVersions',
            [
                'name' => $name,
                'launch_year' => $launchYear,
                'banner_image' => $bannerImage,
            ]
        );
    }

    public function testDestroyGameVersion()
    {
        $this->createGameVersion();
        $gameToCheck = $this->gameVersion;
        $this->gameVersion->delete();
        $this->tester->dontSeeRecord('gameVersions', [
            'id' => $gameToCheck->id,
            'name' => $gameToCheck->name,
            'launch_year' => $gameToCheck->launch_year,
            'banner_image' => $gameToCheck->banner_image
        ]);
    }

    /**
     * =========================================================================
     * =========================================================================
     *     Private Methods
     * =========================================================================
     * =========================================================================
     */

    private function createGameVersion()
    {
        $faker = Factory::create('App\GameVersion');
        $name = $faker->name;
        $launchYear = Carbon::now()->toDateString();
        $bannerImage = $faker->imageUrl($width = 640, $height = 480);
        $this->gameVersion = $this->tester->haveRecord(
            'App\GameVersion',
            [
                'name' => $name,
                'launch_year' => $launchYear,
                'banner_image' => $bannerImage
            ]
        );
    }
}
