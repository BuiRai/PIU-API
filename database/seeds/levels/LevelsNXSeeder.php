<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\ChartType;
use App\Level;
use App\Stepmaker;
use App\Style;

class LevelsNXSeeder extends Seeder
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
        $witchDoctor1 = Song::findOrFail('D01');
        $archOfDarkness = Song::findOrFail('D02');
        $chimera = Song::findOrFail('D03');
        $LoveSong = Song::findOrFail('D14');
        $doYouKnowThatOldSchool = Song::findOrFail('D15');
        $gunRock = Song::findOrFail('D16');
        $bullfighterSSong = Song::findOrFail('D17');
        $uglyDee = Song::findOrFail('D18');
        $finalAuditionEpisode21 = Song::findOrFail('D28');
        $finalAuditionEpisode22 = Song::findOrFail('D30');
        $wiExDocVa = Song::findOrFail('D34');
        $bemera = Song::findOrFail('D35');
        $loveIsADangerZone2Full  = Song::findOrFail('D41');
        $beatOfTheWar2Full = Song::findOrFail('D42');
        $loveIsADangerZone2 = Song::findOrFail('DC04');

        // Witch Doctor #1
        $levels = array(
            ['value' => 2, 'style' => $single, 'players' => 1],
            ['value' => 5, 'style' => $single, 'players' => 1],
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $single, 'players' => 1],
            ['value' => 15, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1],
            ['value' => 19, 'style' => $double, 'players' => 1],
            ['value' => 20, 'style' => $double, 'players' => 1],
            ['value' => 3, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 7, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($witchDoctor1);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Arch of Darkness
        $levels = array(
            ['value' => 2, 'style' => $single, 'players' => 1],
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 5, 'style' => $single, 'players' => 1],
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 14, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $double, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($archOfDarkness);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Chimera
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 11, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 23, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $double, 'players' => 1],
            ['value' => 25, 'style' => $double, 'players' => 1],
            ['value' => 0, 'style' => $coOp, 'players' => 2]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($chimera);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // 2006 Love Song
        $levels = array(
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 10, 'style' => $single, 'players' => 1],
            ['value' => 12, 'style' => $single, 'players' => 1],
            ['value' => 15, 'style' => $single, 'players' => 1],
            ['value' => 13, 'style' => $double, 'players' => 1],
            ['value' => 5, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($LoveSong);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Do You Know That -Old School
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 14, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1],
            ['value' => 8, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($doYouKnowThatOldSchool);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Gun Rock
        $levels = array(
            ['value' => 5, 'style' => $single, 'players' => 1],
            ['value' => 11, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 11, 'style' => $double, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1],
            ['value' => 22, 'style' => $double, 'players' => 1],
            ['value' => 2, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 3, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($gunRock);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Bullfighter\'s Song
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 5, 'style' => $single, 'players' => 1],
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $double, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1],
            ['value' => 21, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($bullfighterSSong);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Ugly Dee
        $levels = array(
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 5, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $single, 'players' => 1],
            ['value' => 11, 'style' => $double, 'players' => 1],
            ['value' => 15, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($uglyDee);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Final Audition Episode 2-1
        $levels = array(
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 20, 'style' => $single, 'players' => 1],
            ['value' => 21, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $double, 'players' => 1],
            ['value' => 21, 'style' => $double, 'players' => 1],
            ['value' => 22, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($finalAuditionEpisode21);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Final Audition Episode 2-2
        $levels = array(
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 21, 'style' => $single, 'players' => 1],
            ['value' => 22, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1],
            ['value' => 23, 'style' => $double, 'players' => 1],
            ['value' => 24, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($finalAuditionEpisode22);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Wi-Ex-Doc-Va
        $levels = array(
            ['value' => 15, 'style' => $single, 'players' => 1],
            ['value' => 21, 'style' => $single, 'players' => 1],
            ['value' => 15, 'style' => $double, 'players' => 1],
            ['value' => 23, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($wiExDocVa);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Bemera
        $levels = array(
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 24, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1],
            ['value' => 26, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($bemera);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Love is a Danger Zone 2 Full
        $levels = array(
            ['value' => 19, 'style' => $single, 'players' => 1],
            ['value' => 21, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($loveIsADangerZone2Full);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Beat of the War 2 Full
        $levels = array(
            ['value' => 19, 'style' => $single, 'players' => 1],
            ['value' => 20, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($beatOfTheWar2Full);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Love is a Danger Zone 2
        $levels = array(
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 0, 'style' => $coOp, 'players' => 2]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($loveIsADangerZone2);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
    }
}
