<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\ChartType;
use App\Level;
use App\Stepmaker;
use App\Style;

class LevelsPremiere3Seeder extends Seeder
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

        // Songs
        $bee = Song::findOrFail('802');
        $dGang = Song::findOrFail('807');
        $hello = Song::findOrFail('811');
        $beatOfTheWar = Song::findOrFail('820');
        $comeToMe = Song::findOrFail('826');

        // Bee
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 10, 'style' => $single, 'players' => 1],
            ['value' => 11, 'style' => $single, 'players' => 1],
            ['value' => 15, 'style' => $single, 'players' => 1],
            ['value' => 19, 'style' => $single, 'players' => 1],
            ['value' => 11, 'style' => $double, 'players' => 1],
            ['value' => 19, 'style' => $double, 'players' => 1],
            ['value' => 21, 'style' => $double, 'players' => 1],
            ['value' => 23, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($bee);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // D Gang
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $double, 'players' => 1],
            ['value' => 15, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($dGang);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Hello
        $levels = array(
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($hello);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Beat of the War
        $levels = array(
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 5, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $single, 'players' => 1],
            ['value' => 10, 'style' => $single, 'players' => 1],
            ['value' => 15, 'style' => $single, 'players' => 1],
            ['value' => 12, 'style' => $double, 'players' => 1],
            ['value' => 19, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($beatOfTheWar);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Come To Me
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 11, 'style' => $single, 'players' => 1],
            ['value' => 12, 'style' => $single, 'players' => 1],
            ['value' => 15, 'style' => $single, 'players' => 1],
            ['value' => 13, 'style' => $double, 'players' => 1],
            ['value' => 14, 'style' => $double, 'players' => 1],
            ['value' => 3, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 6, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($comeToMe);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
    }
}
