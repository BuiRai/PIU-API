<?php

use App\ChartType;
use Carbon\Carbon;
use Faker\Factory;

class ChartTypesTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    protected $typeChart;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSaveChartType()
    {
        $faker = Factory::create('App\ChartType');
        $name = $faker->name;
        $abbreviation = $faker->name;

        $chartType = new ChartType([
            'name' => $name,
            'abbreviation' => $abbreviation
        ]);
        $chartType->save();

        $this->tester->seeRecord(
            'chart_types',
            [
                'name' => $name,
                'abbreviation' => $abbreviation
            ]
        );
    }

    public function testDestroyChartType()
    {
        $this->createTypeChart();
        $typeToCheck = $this->typeChart;
        $this->typeChart->delete();
        $this->tester->dontSeeRecord('chart_types', [
            'id' => $typeToCheck->id,
            'name' => $typeToCheck->name,
            'abbreviation' => $typeToCheck->abbreviation
        ]);
    }

    /**
     * =========================================================================
     * =========================================================================
     *     Private Methods
     * =========================================================================
     * =========================================================================
     */

    private function createTypeChart()
    {
        $faker = Factory::create('App\ChartType');
        $name = $faker->name;
        $abbreviation = $faker->word;
        $this->typeChart = $this->tester->haveRecord(
            'App\ChartType',
            [
                'name' => $name,
                'abbreviation' => $abbreviation
            ]
        );
    }
}
