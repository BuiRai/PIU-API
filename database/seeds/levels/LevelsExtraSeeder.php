<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\ChartType;
use App\Level;
use App\Stepmaker;
use App\Style;

class LevelsExtraSeeder extends Seeder
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
        $chickenWing = Song::findOrFail('911');
        $finalAuditionEpisode1 = Song::findOrFail('922');

        // Chicken Wing
        $levels = array(
            ['value' => 4, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 6, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 9, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 10, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 17, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 19, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 21, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 11, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 17, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 23, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($chickenWing);
            $levelToSave->stepmaker()->associate($level['stepmaker']);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Final Audition Episode 1
        $levels = array(
            ['value' => 4, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 7, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 8, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 13, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 15, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 19, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 11, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 21, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 23, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($finalAuditionEpisode1);
            $levelToSave->stepmaker()->associate($level['stepmaker']);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
    }
}
