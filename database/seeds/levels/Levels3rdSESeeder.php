<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\ChartType;
use App\Level;
use App\Stepmaker;
use App\Style;

class Levels3rdSESeeder extends Seeder
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
        $ohRosa = Song::findOrFail('401');
        $firstLove = Song::findOrFail('402');
        $betrayer = Song::findOrFail('403');
        $solitary = Song::findOrFail('404');
        $mrLarpus = Song::findOrFail('405');

        // Oh! Rosa
        $levels = array(
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 13, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($ohRosa);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // First Love
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $single, 'players' => 1],
            ['value' => 14, 'style' => $double, 'players' => 1],
            ['value' => 1, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 4, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($firstLove);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Betrayer
        $levels = array(
            ['value' => 1, 'style' => $single, 'players' => 1],
            ['value' => 5, 'style' => $single, 'players' => 1],
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 13, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 8, 'style' => $double, 'players' => 1],
            ['value' => 13, 'style' => $double, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1],
            ['value' => 2, 'style' => $singlePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($betrayer);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Solitary
        $levels = array(
            ['value' => 2, 'style' => $single, 'players' => 1],
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $double, 'players' => 1],
            ['value' => 16, 'style' => $double, 'players' => 1],
            ['value' => 3, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 5, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($solitary);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

        // Mr. Larpus
        $levels = array(
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 5, 'style' => $single, 'players' => 1],
            ['value' => 11, 'style' => $single, 'players' => 1],
            ['value' => 14, 'style' => $single, 'players' => 1],
            ['value' => 20, 'style' => $single, 'players' => 1],
            ['value' => 22, 'style' => $single, 'players' => 1],
            ['value' => 14, 'style' => $double, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1],
            ['value' => 23, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($mrLarpus);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }

    }
}
