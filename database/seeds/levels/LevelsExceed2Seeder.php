<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\ChartType;
use App\Level;
use App\Stepmaker;
use App\Style;

class LevelsExceed2Seeder extends Seeder
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
        $dejaVu = Song::findOrFail('B06');
        $iLlGiveYouAllMyLove = Song::findOrFail('B13');
        $jBong = Song::findOrFail('B16');
        $hiBi = Song::findOrFail('B17');
        $solitary2 = Song::findOrFail('B18');
        $canonD = Song::findOrFail('B19');
        $tremeVookOfTheWarRemix = Song::findOrFail('B28');
        $banYaClassicRemix = Song::findOrFail('B29');
        $banYaHIPHOPRemix = Song::findOrFail('B56');
        $canonDFullMix = Song::findOrFail('B57');


        // Deja Vu
        $levels = array(
            ['value' => 1, 'style' => $single, 'players' => 1],
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 13, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $double, 'players' => 1],
            ['value' => 13, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($dejaVu);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // I\'ll Give You All My Love
        $levels = array(
            ['value' => 2, 'style' => $single, 'players' => 1],
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $double, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($iLlGiveYouAllMyLove);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // J Bong
        $levels = array(
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 5, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 13, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1],
            ['value' => 5, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($jBong);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Hi-Bi
        $levels = array(
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 5, 'style' => $single, 'players' => 1],
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 15, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 8, 'style' => $double, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1],
            ['value' => 20, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($hiBi);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Solitary 2
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1],
            ['value' => 3, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 6, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($solitary2);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Canon D
        $levels = array(
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 20, 'style' => $single, 'players' => 1],
            ['value' => 21, 'style' => $single, 'players' => 1],
            ['value' => 10, 'style' => $double, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1],
            ['value' => 22, 'style' => $double, 'players' => 1],
            ['value' => 0, 'style' => $coOp, 'players' => 2]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($canonD);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Treme Vook of the War Remix
        $levels = array(
            ['value' => 11, 'style' => $single, 'players' => 1],
            ['value' => 19, 'style' => $single, 'players' => 1],
            ['value' => 13, 'style' => $double, 'players' => 1],
            ['value' => 22, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($tremeVookOfTheWarRemix);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // BanYa Classic Remix
        $levels = array(
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 19, 'style' => $single, 'players' => 1],
            ['value' => 11, 'style' => $double, 'players' => 1],
            ['value' => 20, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($banYaClassicRemix);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // BanYa HIPHOP Remix
        $levels = array(
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($banYaHIPHOPRemix);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Canon D Full Mix
        $levels = array(
            ['value' => 11, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 23, 'style' => $double, 'players' => 1],
            ['value' => 24, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($canonDFullMix);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

    }
}
