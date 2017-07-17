<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\ChartType;
use App\Level;
use App\Stepmaker;
use App\Style;

class Levels3rdOBGSeeder extends Seeder
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
        $nimgo = Stepmaker::findOrFail(10);
        $osing = Stepmaker::findOrFail(5);

        // Songs
        $finalAudition2 = Song::findOrFail('301');
        $naissance = Song::findOrFail('302');
        $turkeyMarch = Song::findOrFail('303');
        $aNightmare = Song::findOrFail('306');
        $closeYourEyes = Song::findOrFail('307');
        $freeStyle = Song::findOrFail('308');
        $midnightBlue = Song::findOrFail('309');
        $sheLikesPizza = Song::findOrFail('310');
        $pumpingUp = Song::findOrFail('311');
        $donTBotherMe = Song::findOrFail('312');


        // Final Audition 2
        $levels = array(
            ['value' => 4, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 7, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 8, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 10, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 16, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 8, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 17, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 19, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 3, 'stepmaker' => $unknow, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($finalAudition2);
            $levelToSave->stepmaker()->associate($level['stepmaker']);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Naissance
        $levels = array(
            ['value' => 4, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 7, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 8, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 10, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 20, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 7, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 15, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($naissance);
            $levelToSave->stepmaker()->associate($level['stepmaker']);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Turkey March
        $levels = array(
            ['value' => 3, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 7, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 12, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 15, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 18, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 9, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 17, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 19, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 0, 'stepmaker' => $unknow, 'style' => $coOp, 'players' => 2]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($turkeyMarch);
            $levelToSave->stepmaker()->associate($level['stepmaker']);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // A Nightmare
        $levels = array(
            ['value' => 1, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 4, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 13, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 5, 'stepmaker' => $unknow, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($aNightmare);
            $levelToSave->stepmaker()->associate($level['stepmaker']);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Close Your Eyes
        $levels = array(
            ['value' => 4, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 2, 'stepmaker' => $unknow, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 3, 'stepmaker' => $unknow, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($closeYourEyes);
            $levelToSave->stepmaker()->associate($level['stepmaker']);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Free Style
        $levels = array(
            ['value' => 13, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 1, 'stepmaker' => $unknow, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 3, 'stepmaker' => $unknow, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($freeStyle);
            $levelToSave->stepmaker()->associate($level['stepmaker']);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Midnight Blue
        $levels = array(
            ['value' => 12, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 13, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 4, 'stepmaker' => $unknow, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 5, 'stepmaker' => $unknow, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($midnightBlue);
            $levelToSave->stepmaker()->associate($level['stepmaker']);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // She Likes Pizza
        $levels = array(
            ['value' => 8, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 9, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 21, 'stepmaker' => $nimgo, 'style' => $single, 'players' => 1], // Nimgo
            ['value' => 9, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 16, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 23, 'stepmaker' => $osing, 'style' => $double, 'players' => 1] // Osing
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($sheLikesPizza);
            $levelToSave->stepmaker()->associate($level['stepmaker']);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Pumping Up
        $levels = array(
            ['value' => 4, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 12, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($pumpingUp);
            $levelToSave->stepmaker()->associate($level['stepmaker']);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Don\'t Bother Me
        $levels = array(
            ['value' => 4, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 5, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 10, 'stepmaker' => $unknow, 'style' => $single, 'players' => 1],
            ['value' => 5, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 13, 'stepmaker' => $unknow, 'style' => $double, 'players' => 1],
            ['value' => 2, 'stepmaker' => $unknow, 'style' => $singlePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($donTBotherMe);
            $levelToSave->stepmaker()->associate($level['stepmaker']);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }


    }
}
