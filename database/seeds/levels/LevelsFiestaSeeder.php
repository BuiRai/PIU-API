<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\ChartType;
use App\Level;
use App\Stepmaker;
use App\Style;

class LevelsFiestaSeeder extends Seeder
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
        $xtree = Song::findOrFail('1001');
        $sorceressEliese = Song::findOrFail('1002');
        $betrayerAct2 = Song::findOrFail('1003');
        $uGot2Know = Song::findOrFail('1008');
        $destination = Song::findOrFail('1013');
        $vacuum = Song::findOrFail('1017');
        $narcisistaPorExcelencia = Song::findOrFail('1018');
        $doItReggaeStyle = Song::findOrFail('1021');
        $xenesis = Song::findOrFail('1022');
        $arirang = Song::findOrFail('1023');
        $tekClubCopenhagen = Song::findOrFail('1024');
        $helloWilliam = Song::findOrFail('1025');
        $turkeyMarchMinimalTunes = Song::findOrFail('1026');
        $getUpAndGo = Song::findOrFail('1027');
        $phantomIntermezzo = Song::findOrFail('1028');
        $missionPossibleBlowBack = Song::findOrFail('1029');
        $pumpingJumping = Song::findOrFail('1030');
        $bPClassicRemix = Song::findOrFail('1031');
        $paPaHelloizing = Song::findOrFail('1033');
        $bPClassicRemix2 = Song::findOrFail('1034');
        $hardCoreRockMix = Song::findOrFail('1035');
        $proPOPMix = Song::findOrFail('1036');
        $setUpMe2Mix = Song::findOrFail('1037');
        $msgoonRMXPt5 = Song::findOrFail('1038');
        $msgoonRMXPt6 = Song::findOrFail('1039');
        $dejaVu = Song::findOrFail('1042');
        $narcisistaPorExcelenciaFull = Song::findOrFail('1043');
        $dawnOfTheApocalypse = Song::findOrFail('1044');
        $finalAudition2 = Song::findOrFail('1048');
        $finalAudition3UF = Song::findOrFail('1049');
        $finalAuditionEpisode2X = Song::findOrFail('1050');
        $loveIsADangerZone = Song::findOrFail('1051');
        $loveIsADangerZone2 = Song::findOrFail('1052');
        $extravaganza = Song::findOrFail('1053');
        $chickenWing = Song::findOrFail('1054');
        $winter = Song::findOrFail('1055');
        $solitary2 = Song::findOrFail('1056');
        $moonlight = Song::findOrFail('1057');
        $witchDoctor = Song::findOrFail('1058');
        $exceed2Opening = Song::findOrFail('1059');
        $nXOpening = Song::findOrFail('1060');
        $kOAAliceInWonderworld = Song::findOrFail('1061');
        $bemera = Song::findOrFail('1062');
        $pumptris8BitVer = Song::findOrFail('1063');
        $destinationShort  = Song::findOrFail('1064');
        $procedimientosParaLlegarAUnComunAcuerdo = Song::findOrFail('1065');
        $tepris = Song::findOrFail('1094');
        $napalm = Song::findOrFail('1095');
        $dieciseis = Song::findOrFail('1096');

        // Xtree
        $levels = array(
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 12, 'style' => $single, 'players' => 1],
            ['value' => 20, 'style' => $single, 'players' => 1],
            ['value' => 14, 'style' => $double, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1],
            ['value' => 22, 'style' => $double, 'players' => 1],
            ['value' => 2, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 3, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($xtree);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Sorceress Eliese
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 10, 'style' => $single, 'players' => 1],
            ['value' => 15, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 21, 'style' => $single, 'players' => 1],
            ['value' => 23, 'style' => $single, 'players' => 1],
            ['value' => 8, 'style' => $double, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1],
            ['value' => 24, 'style' => $double, 'players' => 1],
            ['value' => 0, 'style' => $coOp, 'players' => 2]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($sorceressEliese);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Betrayer -Act 2-
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 10, 'style' => $single, 'players' => 1],
            ['value' => 15, 'style' => $double, 'players' => 1],
            ['value' => 3, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 3, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($betrayerAct2);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // U Got 2 Know
        $levels = array(
            ['value' => 2, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 19, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1],
            ['value' => 2, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 4, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($uGot2Know);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Destination
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 11, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 19, 'style' => $single, 'players' => 1],
            ['value' => 13, 'style' => $double, 'players' => 1],
            ['value' => 20, 'style' => $double, 'players' => 1],
            ['value' => 5, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($destination);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Vacuum
        $levels = array(
            ['value' => 19, 'style' => $single, 'players' => 1],
            ['value' => 21, 'style' => $single, 'players' => 1],
            ['value' => 23, 'style' => $single, 'players' => 1],
            ['value' => 22, 'style' => $double, 'players' => 1],
            ['value' => 25, 'style' => $double, 'players' => 1],
            ['value' => 3, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($vacuum);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Narcisista Por Excelencia
        $levels = array(
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 5, 'style' => $single, 'players' => 1],
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $double, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($narcisistaPorExcelencia);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Do It -Reggae Style
        $levels = array(
            ['value' => 13, 'style' => $single, 'players' => 1],
            ['value' => 15, 'style' => $double, 'players' => 1],
            ['value' => 3, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($doItReggaeStyle);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Xenesis
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 10, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 12, 'style' => $double, 'players' => 1],
            ['value' => 15, 'style' => $double, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1],
            ['value' => 1, 'style' => $singlePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($xenesis);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Arirang
        $levels = array(
            ['value' => 9, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 22, 'style' => $single, 'players' => 1],
            ['value' => 10, 'style' => $double, 'players' => 1],
            ['value' => 20, 'style' => $double, 'players' => 1],
            ['value' => 2, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($arirang);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Tek -Club Copenhagen-
        $levels = array(
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 5, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1],
            ['value' => 5, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 4, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($tekClubCopenhagen);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Hello William
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 19, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $double, 'players' => 1],
            ['value' => 21, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($helloWilliam);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Turkey March -Minimal Tunes-
        $levels = array(
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 10, 'style' => $double, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1],
            ['value' => 1, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($turkeyMarchMinimalTunes);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Get Up (And Go)
        $levels = array(
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 10, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 11, 'style' => $double, 'players' => 1],
            ['value' => 20, 'style' => $double, 'players' => 1],
            ['value' => 3, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($getUpAndGo);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Phantom -Intermezzo-
        $levels = array(
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 12, 'style' => $single, 'players' => 1],
            ['value' => 15, 'style' => $single, 'players' => 1],
            ['value' => 19, 'style' => $single, 'players' => 1],
            ['value' => 21, 'style' => $single, 'players' => 1],
            ['value' => 15, 'style' => $double, 'players' => 1],
            ['value' => 19, 'style' => $double, 'players' => 1],
            ['value' => 20, 'style' => $double, 'players' => 1],
            ['value' => 3, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($phantomIntermezzo);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Mission Possible -Blow Back-
        $levels = array(
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1],
            ['value' => 3, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 5, 'style' => $singlePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($missionPossibleBlowBack);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Pumping Jumping
        $levels = array(
            ['value' => 1, 'style' => $single, 'players' => 1],
            ['value' => 3, 'style' => $single, 'players' => 1],
            ['value' => 5, 'style' => $single, 'players' => 1],
            ['value' => 13, 'style' => $single, 'players' => 1],
            ['value' => 15, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 19, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $double, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1],
            ['value' => 4, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 5, 'style' => $doublePerfomance, 'players' => 1],
            ['value' => 6, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($pumpingJumping);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // B.P Classic Remix
        $levels = array(
            ['value' => 12, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $single, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($bPClassicRemix);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // PaPa Helloizing
        $levels = array(
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 19, 'style' => $single, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($paPaHelloizing);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // B.P Classic Remix 2
        $levels = array(
            ['value' => 11, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $single, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($bPClassicRemix2);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Hard Core Rock Mix
        $levels = array(
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 21, 'style' => $single, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($hardCoreRockMix);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Pro POP Mix
        $levels = array(
            ['value' => 17, 'style' => $single, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($proPOPMix);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Set Up Me2 Mix
        $levels = array(
            ['value' => 17, 'style' => $single, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($setUpMe2Mix);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // msgoon RMX Pt. 5
        $levels = array(
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1],
            ['value' => 3, 'style' => $singlePerfomance, 'players' => 1],
            ['value' => 4, 'style' => $doublePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($msgoonRMXPt5);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // msgoon RMX Pt. 6
        $levels = array(
            ['value' => 20, 'style' => $single, 'players' => 1],
            ['value' => 19, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($msgoonRMXPt6);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Deja Vu
        $levels = array(
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($dejaVu);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Narcisista por Excelencia Full
        $levels = array(
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($narcisistaPorExcelenciaFull);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Dawn of the Apocalypse
        $levels = array(
            ['value' => 15, 'style' => $single, 'players' => 1],
            ['value' => 21, 'style' => $single, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($dawnOfTheApocalypse);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Final Audition 2 Short
        $levels = array(
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($finalAudition2);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Final Audition 3 U.F Short
        $levels = array(
            ['value' => 17, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($finalAudition3UF);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Final Audition 2X Short
        $levels = array(
            ['value' => 20, 'style' => $single, 'players' => 1],
            ['value' => 19, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($finalAuditionEpisode2X);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Love is a Danger Zone Short
        $levels = array(
            ['value' => 13, 'style' => $single, 'players' => 1],
            ['value' => 20, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($loveIsADangerZone);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Love is a Danger Zone 2 Short
        $levels = array(
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 19, 'style' => $single, 'players' => 1],
            ['value' => 21, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($loveIsADangerZone2);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Extravaganza Short
        $levels = array(
            ['value' => 14, 'style' => $single, 'players' => 1],
            ['value' => 14, 'style' => $double, 'players' => 1],
            ['value' => 21, 'style' => $double, 'players' => 1],
            ['value' => 15, 'style' => $singlePerfomance, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($extravaganza);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Chicken Wing Short
        $levels = array(
            ['value' => 20, 'style' => $single, 'players' => 1],
            ['value' => 13, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($chickenWing);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Winter Short
        $levels = array(
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 10, 'style' => $double, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($winter);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Solitary 2 Short
        $levels = array(
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($solitary2);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Moonlight Short
        $levels = array(
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 20, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($moonlight);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Witch Doctor Short
        $levels = array(
            ['value' => 14, 'style' => $single, 'players' => 1],
            ['value' => 20, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($witchDoctor);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Exceed 2 Opening Short
        $levels = array(
            ['value' => 15, 'style' => $single, 'players' => 1],
            ['value' => 19, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($exceed2Opening);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // NX Opening Short
        $levels = array(
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 17, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($nXOpening);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // K.O.A -Alice in Wonderworld Short
        $levels = array(
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($kOAAliceInWonderworld);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Bemera Short
        $levels = array(
            ['value' => 13, 'style' => $single, 'players' => 1],
            ['value' => 21, 'style' => $single, 'players' => 1],
            ['value' => 23, 'style' => $single, 'players' => 1],
            ['value' => 19, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($kOAAliceInWonderworld);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Pumptris 8Bit ver. Short
        $levels = array(
            ['value' => 8, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 22, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($pumptris8BitVer);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Destination Short
        $levels = array(
            ['value' => 9, 'style' => $single, 'players' => 1],
            ['value' => 15, 'style' => $single, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1],
            ['value' => 22, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($destinationShort);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Procedimientos Para Llegar A Un Comun Acuerdo
        $levels = array(
            ['value' => 18, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($procedimientosParaLlegarAUnComunAcuerdo);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Tepris
        $levels = array(
            ['value' => 2, 'style' => $single, 'players' => 1],
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 7, 'style' => $single, 'players' => 1],
            ['value' => 16, 'style' => $single, 'players' => 1],
            ['value' => 9, 'style' => $double, 'players' => 1],
            ['value' => 18, 'style' => $double, 'players' => 1],
            ['value' => 0, 'style' => $coOp, 'players' => 2]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($tepris);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Napalm
        $levels = array(
            ['value' => 13, 'style' => $single, 'players' => 1],
            ['value' => 19, 'style' => $single, 'players' => 1],
            ['value' => 22, 'style' => $single, 'players' => 1],
            ['value' => 14, 'style' => $double, 'players' => 1],
            ['value' => 23, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($napalm);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
        // Dieciseis
        $levels = array(
            ['value' => 2, 'style' => $single, 'players' => 1],
            ['value' => 4, 'style' => $single, 'players' => 1],
            ['value' => 6, 'style' => $single, 'players' => 1],
            ['value' => 13, 'style' => $single, 'players' => 1],
            ['value' => 5, 'style' => $double, 'players' => 1],
            ['value' => 15, 'style' => $double, 'players' => 1]
        );
        foreach ($levels as $level) {
            $levelToSave = new Level(['value' => $level['value'], 'players' => $level['players']]);
            $levelToSave->song()->associate($dieciseis);
            $levelToSave->stepmaker()->associate($unknow);
            $levelToSave->style()->associate($level['style']);
            $levelToSave->chartType()->associate($am);
            $levelToSave->save();
        }
    }
}
