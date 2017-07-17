<?php

use App\Style;
use Carbon\Carbon;
use Faker\Factory;

class StylesTest extends \Codeception\Test\Unit
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
    public function testSaveStyle()
    {
        $faker = Factory::create('App\Style');
        $name = $faker->word;

        $style = new Style([ 'style' => $name ]);
        $style->save();

        $this->tester->seeRecord(
            'styles', ['style' => $name]
        );
    }
}
