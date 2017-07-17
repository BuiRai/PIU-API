<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\ChartType;
use App\Level;
use App\Stepmaker;
use App\Style;

class LevelsPerfectCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Charts type
        $am = ChartType::findOrFail(1);
        $ucs = ChartType::findOrFail(2);

        // Styles
        $single = Style::findOrFail(1);
        $double = Style::findOrFail(2);
        $singlePerfomance = Style::findOrFail(3);
        $doublePerfomance = Style::findOrFail(4);
        $coOp = Style::findOrFail(5);
        $halfDouble = Style::findOrFail(6);

        // Stepmakers
        $unknow = Stepmaker::findOrFail(1);
        $huge = Stepmaker::findOrFail(7);

        // Songs
        $pumpJump = Song::findOrFail('501');
        $n = Song::findOrFail('502');
        $rollingChristmas = Song::findOrFail('503');
        $allIWantForXMas = Song::findOrFail('504');
        $beethovenVirus = Song::findOrFail('505');
        $slam = Song::findOrFail('516');

        // Pump Jump
        $levels = array(
            ['value' => 4, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 15, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 17, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 2, 'stepmaker' => $unknow, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 4, 'stepmaker' => $unknow, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($pumpJump);
            $levelToSave->stepmaker()->associate($level['stepmaker']);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // N
        $levels = array(
            ['value' => 5, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 16, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 16, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 2, 'stepmaker' => $unknow, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 5, 'stepmaker' => $unknow, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($n);
            $levelToSave->stepmaker()->associate($level['stepmaker']);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Rolling Christmas
        $levels = array(
            ['value' => 3, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 5, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 8, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 13, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 5, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 13, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 17, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 0, 'stepmaker' => $unknow, 'style' => $coOp, 'players' => 2]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($rollingChristmas);
            $levelToSave->stepmaker()->associate($level['stepmaker']);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // All I Want For X-mas
        $levels = array(
            ['value' => 3, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 7, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 12, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 20, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 14, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 18, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 22, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 2, 'stepmaker' => $unknow, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 3, 'stepmaker' => $unknow, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($allIWantForXMas);
            $levelToSave->stepmaker()->associate($level['stepmaker']);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Beethoven Virus
        $levels = array(
            ['value' => 3, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 6, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 11, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 7, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($beethovenVirus);
            $levelToSave->stepmaker()->associate($level['stepmaker']);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Slam
        $levels = array(
            ['value' => 3, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 6, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 9, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 17, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 18, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 6, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 20, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 23, 'stepmaker' => $huge, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($slam);
            $levelToSave->stepmaker()->associate($level['stepmaker']);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

    }
}
