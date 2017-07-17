<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\ChartType;
use App\Level;
use App\Stepmaker;
use App\Style;

class LevelsExceedSeeder extends Seeder
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
        $finalAudition3UF = Song::findOrFail('A01');
        $naissance2 = Song::findOrFail('A02');
        $monkeyFingers = Song::findOrFail('A03');
        $blazing = Song::findOrFail('A04');
        $pumpMeAmadeus = Song::findOrFail('A05');
        $xTreme = Song::findOrFail('A06');
        $getUp = Song::findOrFail('A07');

        // Final Audition 3 U.F
        $levels = array(
            ['value' => 2, 'style' => $single, 'players' => 1],
            ['value' => 5, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $single, 'players' => 1],
            ['value' => 14, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1],
            ['value' => 19, 'style' => $double, 'players' => 1],
            ['value' => 3, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 5, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($finalAudition3UF);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Naissance 2
        $levels = array(
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 13, 'style' => $single, 'players' => 1],
            ['value' => 15, 'style' => $double, 'players' => 1],
            ['value' => 19, 'style' => $double, 'players' => 1],
            ['value' => 3, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 5, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($naissance2);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Monkey Fingers
        $levels = array(
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 5, 'style' => $single, 'players' => 1],
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 15, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1],
            ['value' => 5, 'style' => $singlePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($monkeyFingers);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Blazing
        $levels = array(
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $single, 'players' => 1],
            ['value' => 15, 'style' => $single, 'players' => 1],
            ['value' => 19, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($blazing);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Pump Me Amadeus
        $levels = array(
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 5, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 10, 'style' => $double, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1],
            ['value' => 19, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($pumpMeAmadeus);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // X-Treme
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $single, 'players' => 1],
            ['value' => 14, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 13, 'style' => $double, 'players' => 1],
            ['value' => 19, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($xTreme);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Get Up!
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 13, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $double, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($getUp);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
    }
}
