<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\ChartType;
use App\Level;
use App\Stepmaker;
use App\Style;

class LevelsFiestaExSeeder extends Seeder
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
        $cleaner = Song::findOrFail('1101');
        $interference = Song::findOrFail('1102');
        $reality = Song::findOrFail('1103');
        $takeOut = Song::findOrFail('1104');
        $butterfly = Song::findOrFail('1105');
        $overblow = Song::findOrFail('1106');
        $weGot2Know = Song::findOrFail('1107');
        $crashday = Song::findOrFail('1119');
        $hungarianDanceV = Song::findOrFail('1123');
        $theDevil = Song::findOrFail('1124');
        $native = Song::findOrFail('1126');
        $vacuumCleaner = Song::findOrFail('1131');
        $everybodyGot2Know = Song::findOrFail('1132');
        $interferenceFull  = Song::findOrFail('1135');
        $crashdayFull = Song::findOrFail('1142');
        $trotprisShort = Song::findOrFail('1145');
        $cleanerShort = Song::findOrFail('1146');
        $takeOutShort = Song::findOrFail('1147');
        $overblowShort = Song::findOrFail('1148');
        $xRaveShort = Song::findOrFail('1149');
        $pavane = Song::findOrFail('1152');
        $pineNut = Song::findOrFail('1153');
        $asdf = Song::findOrFail('1154');
        $jonathanSDream = Song::findOrFail('1160');

        // Cleaner
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 12, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 22, 'style' => $single, 'players' => 1],
            ['value' => 23, 'style' => $single, 'players' => 1],
            ['value' => 20, 'style' => $double, 'players' => 1],
            ['value' => 24, 'style' => $double, 'players' => 1],
            ['value' => 26, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($cleaner);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Interference
        $levels = array(
            ['value' => 11, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 12, 'style' => $double, 'players' => 1],
            ['value' => 19, 'style' => $double, 'players' => 1],
            ['value' => 21, 'style' => $double, 'players' => 1],
            ['value' => 2, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 3, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($interference);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Reality
        $levels = array(
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 14, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 4, 'style' => $double, 'players' => 1],
            ['value' => 15, 'style' => $double, 'players' => 1],
            ['value' => 4, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 2, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($reality);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Take Out
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 11, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 20, 'style' => $single, 'players' => 1],
            ['value' => 13, 'style' => $double, 'players' => 1],
            ['value' => 19, 'style' => $double, 'players' => 1],
            ['value' => 22, 'style' => $double, 'players' => 1],
            ['value' => 23, 'style' => $double, 'players' => 1],
            ['value' => 2, 'style' => $coOp, 'players' => 3]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($takeOut);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Butterfly
        $levels = array(
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 13, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $double, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1],
            ['value' => 2, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 3, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($butterfly);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Overblow
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 10, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 20, 'style' => $single, 'players' => 1],
            ['value' => 12, 'style' => $double, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1],
            ['value' => 20, 'style' => $double, 'players' => 1],
            ['value' => 2, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 3, 'style' => $doublePerfomance, 'players' => 1],
            ['value' => 0, 'style' => $coOp, 'players' => 2]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($overblow);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // We Got 2 Know
        $levels = array(
            ['value' => 1, 'style' => $single, 'players' => 1],
            ['value' => 5, 'style' => $single, 'players' => 1],
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 20, 'style' => $single, 'players' => 1],
            ['value' => 4, 'style' => $double, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1],
            ['value' => 2, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 3, 'style' => $doublePerfomance, 'players' => 1],
            ['value' => 0, 'style' => $coOp, 'players' => 3]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($weGot2Know);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Crashday
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 11, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 23, 'style' => $single, 'players' => 1],
            ['value' => 24, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1],
            ['value' => 26, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($crashday);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Hungarian Dance V
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $double, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1],
            ['value' => 2, 'style' => $singlePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($hungarianDanceV);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // The Devil
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $single, 'players' => 1],
            ['value' => 12, 'style' => $single, 'players' => 1],
            ['value' => 20, 'style' => $single, 'players' => 1],
            ['value' => 13, 'style' => $double, 'players' => 1],
            ['value' => 21, 'style' => $double, 'players' => 1],
            ['value' => 0, 'style' => $doublePerfomance, 'players' => 2]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($theDevil);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Native
        $levels = array(
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 5, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 20, 'style' => $single, 'players' => 1],
            ['value' => 10, 'style' => $double, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1],
            ['value' => 2, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 3, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($native);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Vacuum Cleaner
        $levels = array(
            ['value' => 15, 'style' => $single, 'players' => 1],
            ['value' => 20, 'style' => $single, 'players' => 1],
            ['value' => 25, 'style' => $single, 'players' => 1],
            ['value' => 20, 'style' => $double, 'players' => 1],
            ['value' => 27, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($vacuumCleaner);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Everybody Got 2 Know
        $levels = array(
            ['value' => 19, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($everybodyGot2Know);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Interference Full
        $levels = array(
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 15, 'style' => $double, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($interferenceFull);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Crashday Full
        $levels = array(
            ['value' => 22, 'style' => $single, 'players' => 1],
            ['value' => 22, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($crashdayFull);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Trotpris Short
        $levels = array(
            ['value' => 14, 'style' => $single, 'players' => 1],
            ['value' => 15, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($trotprisShort);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Cleaner Short
        $levels = array(
            ['value' => 21, 'style' => $single, 'players' => 1],
            ['value' => 20, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($cleanerShort);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Take Out Short
        $levels = array(
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 19, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($takeOutShort);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Overblow Short
        $levels = array(
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($overblowShort);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // X-Rave Short
        $levels = array(
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($xRaveShort);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Pavane
        $levels = array(
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 10, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $double, 'players' => 1],
            ['value' => 22, 'style' => $double, 'players' => 1],
            ['value' => 2, 'style' => $singlePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($pavane);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Pine Nut
        $levels = array(
            ['value' => 13, 'style' => $single, 'players' => 1],
            ['value' => 20, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $double, 'players' => 1],
            ['value' => 2, 'style' => $singlePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($reality);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // ASDF
        $levels = array(
            ['value' => 9, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 10, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($reality);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Jonathan's Dream
        $levels = array(
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 10, 'style' => $double, 'players' => 1],
            ['value' => 15, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($jonathanSDream);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
    }
}
