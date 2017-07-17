<?php

use App\Song;
use App\Artist;
use App\GameVersion;
use App\TypeSong;
use Carbon\Carbon;
use Faker\Factory;

class SongsTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    private $artist;
    private $gameVersion;
    private $typeSong;

    protected function _before()
    {
        $this->createArtist();
        $this->createTypeSong();
        $this->createGameVersion();
    }

    protected function _after()
    {
    }

    // tests to save a song
    public function testSaveSong()
    {
        $faker = Factory::create('App\Song');
        $id = 'FB01';
        $title = $faker->name;
        $bpm = $faker->numberBetween($min = 124, $max = 236);
        $bannerImage = $faker->imageUrl($width = 640, $height = 480);
        $created_at = Carbon::now();
        $updated_at = Carbon::now();

        $song = new Song([
            'id' => $id,
            'title' => $title,
            'bpm' => $bpm,
            'bannerImage' => $bannerImage
        ]);

        $song->artist()->associate($this->artist);
        $song->gameVersion()->associate($this->gameVersion);
        $song->type()->associate($this->typeSong);

        $song->save();

        $this->tester->seeRecord(
            'songs',
            [
                'id' => $id,
                'title' => $title,
                'bpm' => $bpm,
                'bannerImage' => $bannerImage,
                'artist_id' => $this->artist->id,
                'game_version_id' => $this->gameVersion->id,
                'type_song_id' => $this->typeSong->id
            ]
        );
    }

    private function createGameVersion()
    {
        $faker = Factory::create('App\GameVersion');
        $name = $faker->name;
        $bannerImage = $faker->imageUrl($width = 640, $height = 480);
        $created_at = Carbon::now();
        $updated_at = Carbon::now();
        $launchYear = Carbon::now();

        $this->gameVersion = $this->tester->haveRecord(
            'App\GameVersion',
            [
                'name' => $name,
                'launch_year' => $launchYear,
                'banner_image' => $bannerImage,
                'created_at' => $created_at,
                'updated_at' => $updated_at
            ]
        );
    }

    private function createTypeSong()
    {
        $faker = Factory::create('App\TypeSong');
        $name = $faker->name;
        $created_at = Carbon::now();
        $updated_at = Carbon::now();

        $this->typeSong = $this->tester->haveRecord(
            'App\TypeSong',
            ['name' => $name, 'created_at' => $created_at, 'updated_at' => $updated_at ]
        );
    }

    private function createArtist()
    {
        $faker = Factory::create('App\Artist');
        $name = $faker->name;
        $created_at = Carbon::now();
        $updated_at = Carbon::now();

        $this->artist = $this->tester->haveRecord(
            'App\Artist',
            ['name' => $name, 'created_at' => $created_at, 'updated_at' => $updated_at ]
        );
    }
}
