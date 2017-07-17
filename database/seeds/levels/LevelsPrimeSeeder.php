<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\ChartType;
use App\Level;
use App\Stepmaker;
use App\Style;

class LevelsPrimeSeeder extends Seeder
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
        $nemesis = Song::findOrFail('1401');
        $katkoi = Song::findOrFail('1402');
        $latinoVirus = Song::findOrFail('1403');
        $elysium = Song::findOrFail('1404');
        $yogSothoth = Song::findOrFail('1405');
        $silhouetteEf = Song::findOrFail('1406');
        $chineseResta = Song::findOrFail('1407');
        $avalanche = Song::findOrFail('1408');
        $forceOfRa = Song::findOrFail('1409');
        $requiem = Song::findOrFail('1410');
        $uGotMeCraz = Song::findOrFail('1411');
        $b2 = Song::findOrFail('1412');
        $meteorize = Song::findOrFail('1413');
        $mad5cience = Song::findOrFail('1414');
        $hestia = Song::findOrFail('1415');
        $amphitryon = Song::findOrFail('1416');
        $leakageVolta = Song::findOrFail('1417');
        $removableDis = Song::findOrFail('1418');
        $superFantasy = Song::findOrFail('1419');
        $violetPerfum = Song::findOrFail('1420');
        $redSwan = Song::findOrFail('1421');
        $hyacinth = Song::findOrFail('1422');
        $blazeEmotion = Song::findOrFail('1423');
        $1950 = Song::findOrFail('1424');
        $sugarConspir = Song::findOrFail('1425');
        $allegroPIUM = Song::findOrFail('1426');
        $annihilatorM = Song::findOrFail('1427');
        $moveThatBod = Song::findOrFail('1428');
        $rockTheHous = Song::findOrFail('1429');
        $scorpionKing = Song::findOrFail('1430');
        $pointZeroOn = Song::findOrFail('1431');
        $redSnow = Song::findOrFail('1433');
        $campanella = Song::findOrFail('1434');
        $youAgainMy  = Song::findOrFail('1435');
        $robotBattle = Song::findOrFail('1436');
        $barBarBar = Song::findOrFail('1437');
        $onAndOn = Song::findOrFail('1438');
        $elvis = Song::findOrFail('1439');
        $veryGood = Song::findOrFail('1440');
        $iMSorry = Song::findOrFail('1441');
        $pandora = Song::findOrFail('1442');
        $venus = Song::findOrFail('1443');
        $hateDonT  = Song::findOrFail('1444');
        $supermagic = Song::findOrFail('1445');
        $sugarFree = Song::findOrFail('1446');
        $her = Song::findOrFail('1447');
        $noNoNo = Song::findOrFail('1448');
        $loner = Song::findOrFail('1449');
        $flyingDuck = Song::findOrFail('1450');
        $ineffectiveB = Song::findOrFail('1451');
        $one = Song::findOrFail('1452');
        $selfishness = Song::findOrFail('1454');
        $cosmicalRhyt = Song::findOrFail('1457');
        $dollyKiss = Song::findOrFail('1458');
        $matador = Song::findOrFail('1459');
        $milkyWayGal = Song::findOrFail('1460');
        $feelMyHappi = Song::findOrFail('1461');
        $ragnarok = Song::findOrFail('1462');
        $achluoias = Song::findOrFail('1463');
        $karyawisata = Song::findOrFail('1464');
        $videoOutC = Song::findOrFail('1465');
        $limbo = Song::findOrFail('1467');
        $melodia = Song::findOrFail('1468');
        $queVivaLaV = Song::findOrFail('1469');
        $acrossTheOc = Song::findOrFail('1470');
        $stardustOver = Song::findOrFail('1472');
        $reminiscence = Song::findOrFail('1473');
        $momentDay = Song::findOrFail('1474');
        $amaiYuuwaku  = Song::findOrFail('1475');
        $yoropikuPiku = Song::findOrFail('1476');
        $imprinting = Song::findOrFail('1477');
        $suddenRomanc = Song::findOrFail('1478');
        $mitotsudaira = Song::findOrFail('1479');
        $smileDiary = Song::findOrFail('1480');
        $badAppleF = Song::findOrFail('1481');
        $creed1stDe = Song::findOrFail('1482');
        $soraNoShira = Song::findOrFail('1483');
        $fourSeasons  = Song::findOrFail('1484');
        $aiYurete = Song::findOrFail('1485');
        $setsunaTrip = Song::findOrFail('1486');
        $trashyInnoce = Song::findOrFail('1487');
        $renAiYuush = Song::findOrFail('1488');
        $afterSchool  = Song::findOrFail('1489');
        $prime = Song::findOrFail('1490');
        $badEndN = Song::findOrFail('1491');
        $queenOfThe  = Song::findOrFail('1492');
        $idealizedRom = Song::findOrFail('1493');
        $justHoldOn  = Song::findOrFail('1494');
        $unlock = Song::findOrFail('1495');
        $heavyRotatio = Song::findOrFail('1496');
        $breakItDown = Song::findOrFail('1497');
        $hypercube = Song::findOrFail('1498');
        $likeMe = Song::findOrFail('1499');
        $beethovenInf = Song::findOrFail('14A0');
        $avalanquiem = Song::findOrFail('14A1');
        $paradoxx = Song::findOrFail('14A2');
        $barBarBar = Song::findOrFail('14C0');
        $sugarFree  = Song::findOrFail('14C1');
        $noNoNo = Song::findOrFail('14C2');
        $moveThatBod = Song::findOrFail('14C3');
        $pandora = Song::findOrFail('14C4');
        $fourSeasons  = Song::findOrFail('14C5');
        $badAppleF = Song::findOrFail('14C6');
        $creed1stDe = Song::findOrFail('14C7');
        $superFantasy = Song::findOrFail('14E0');
        $yogSothoth  = Song::findOrFail('14E1');
        $silhouetteEf = Song::findOrFail('14E2');
        $selfishness  = Song::findOrFail('14E3');
        $rockTheHous = Song::findOrFail('14E4');
        $moveThatBod = Song::findOrFail('14E5');
        $pRIMEOpening = Song::findOrFail('14E6');
        $stardustOver = Song::findOrFail('14E7');
        $heavyRotatio = Song::findOrFail('14F0');
    }
}
