<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;
use Faker\Factory as Faker;

class SongsPrimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Artists
        $sidSound = Artist::where('name', 'SID-SOUND')->first();
        $shk = Artist::where('name', 'SHK')->first();
        $vospi = Artist::where('name', 'Vospi')->first();
        $zircon = Artist::where('name', 'Zircon')->first();
        $synthWulf = Artist::where('name', 'SynthWulf')->first();
        $dMAshura = Artist::where('name', 'DM Ashura')->first();
        $yahpp = Artist::where('name', 'Yahpp')->first();
        $doin = Artist::where('name', 'Doin')->first();
        $max = Artist::where('name', 'MAX')->first();
        $aKB48Cover = Artist::where('name', 'AKB48 (Cover)')->first();
        $typeMARS = Artist::where('name', 'typeMARS')->first();
        $matduke = Artist::where('name', 'Matduke')->first();
        $nato = Artist::where('name', 'Nato')->first();
        $tatshMusicCircle = Artist::where('name', 'TatshMusicCircle')->first();
        $masayoshiMinoshima = Artist::where('name', 'Masayoshi Minoshima')->first();
        $kara = Artist::where('name', 'KARA')->first();
        $dMAshuraFeatSkizzoHanna = Artist::where('name', 'DM Ashura feat. Skizzo & Hanna')->first();
        $apink = Artist::where('name', 'Apink')->first();
        $tAra = Artist::where('name', 'T-ara')->first();
        $crayonPop = Artist::where('name', 'Crayon Pop')->first();
        $maxSlamNato = Artist::where('name', 'MAX & SLAM & NATO')->first();
        $maxMemme = Artist::where('name', 'MAX & MEMME')->first();
        $memme = Artist::where('name', 'Memme')->first();
        $banyaWarak = Artist::where('name', 'Banya & Warak')->first();
        $mazo = Artist::where('name', 'MAZO')->first();
        $aKB48Cover = Artist::where('name', 'AKB48 (Cover)')->first();
        $miuraDaichiCover = Artist::where('name', 'Miura Daichi (Cover)')->first();
        $void = Artist::where('name', 'void')->first();
        $etia = Artist::where('name', 'ETIA.')->first();
        $hitoshizukuPXYama = Artist::where('name', 'HitoshizukuP X yama')->first();
        $tatsh = Artist::where('name', 'Tatsh')->first();
        $lastNote = Artist::where('name', 'Last Note.')->first();
        $masayoshiMinoshima = Artist::where('name', 'Masayoshi Minoshima')->first();
        $you = Artist::where('name', 'you')->first();
        $sakuzyo = Artist::where('name', 'Sakuzyo')->first();
        $bakusuteSotokandaIcchome = Artist::where('name', 'Bakusute Sotokanda Icchome')->first();
        $matduke = Artist::where('name', 'Matduke')->first();
        $wisinFtMichelTel = Artist::where('name', 'Wisin Ft. Michel Teló')->first();
        $lyllooFeatEgas = Artist::where('name', 'Lylloo feat. Egas')->first();
        $daddyYankee = Artist::where('name', 'Daddy Yankee')->first();
        $vesuviaXREDSHiFT = Artist::where('name', 'Vesuvia x REDSHiFT')->first();
        $dAan = Artist::where('name', 'D_AAN')->first();
        $threer2 = Artist::where('name', '3R2')->first();
        $cranky = Artist::where('name', 'Cranky')->first();
        $maxDoom = Artist::where('name', 'MAX & DOOM')->first();
        $epikHigh = Artist::where('name', 'Epik High')->first();
        $norazo = Artist::where('name', 'Norazo')->first();
        $cherryFilter = Artist::where('name', 'Cherry Filter')->first();
        $outsider = Artist::where('name', 'Outsider')->first();
        $blockB = Artist::where('name', 'Block B')->first();
        $supremeTeam = Artist::where('name', 'Supreme Team')->first();
        $dalShabet = Artist::where('name', 'Dal shabet')->first();
        $shinwha = Artist::where('name', 'SHINWHA')->first();
        $cnblue = Artist::where('name', 'CNBLUE')->first();
        $aoa = Artist::where('name', 'AOA')->first();
        $vixx = Artist::where('name', 'VIXX')->first();
        $cYOStyle = Artist::where('name', 'CYO Style')->first();
        $cYOStyleHenohenomoheji = Artist::where('name', 'CYO Style & Henohenomoheji')->first();
        $cashew = Artist::where('name', 'Cashew')->first();
        $r300k = Artist::where('name', 'r300k')->first();
        $slam = Artist::where('name', 'SLAM')->first();
        $gentleStick = Artist::where('name', 'Gentle Stick')->first();
        $paulBazooka = Artist::where('name', 'Paul Bazooka')->first();
        $warak = Artist::where('name', 'Warak')->first();
        $m2u = Artist::where('name', 'M2U')->first();

        // Game versions
        $prime = GameVersion::where('name', 'Prime')->first();

        Song::create([
            'id'=>'1401',
            'title'=>'Nemesis',
            'bpm'=>'160',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$m2u->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1402',
            'title'=>'Katkoi',
            'bpm'=>'180',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$m2u->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1403',
            'title'=>'Latino Virus',
            'bpm'=>'160',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$warak->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1404',
            'title'=>'Elysium',
            'bpm'=>'128',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$warak->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1405',
            'title'=>'Yog Sothoth',
            'bpm'=>'200',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$nato->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1406',
            'title'=>'Silhouette Effect',
            'bpm'=>'167',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$nato->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1407',
            'title'=>'Chinese Restaurant',
            'bpm'=>'175',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$memme->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1408',
            'title'=>'Avalanche',
            'bpm'=>'175',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$memme->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1409',
            'title'=>'Force of Ra',
            'bpm'=>'180',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$memme->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1410',
            'title'=>'Requiem',
            'bpm'=>'160',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$max->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1411',
            'title'=>'U Got Me Crazy',
            'bpm'=>'128',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$max->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1412',
            'title'=>'B2',
            'bpm'=>'158',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$max->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1413',
            'title'=>'Meteorize',
            'bpm'=>'136',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$paulBazooka->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1414',
            'title'=>'Mad5cience',
            'bpm'=>'130',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$paulBazooka->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1415',
            'title'=>'Hestia',
            'bpm'=>'150',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$gentleStick->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1416',
            'title'=>'Amphitryon',
            'bpm'=>'155',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$gentleStick->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1417',
            'title'=>'Leakage Voltage',
            'bpm'=>'120~180',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$doin->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1418',
            'title'=>'Removable Disk0',
            'bpm'=>'130',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$doin->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1419',
            'title'=>'Super Fantasy',
            'bpm'=>'145',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$shk->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1420',
            'title'=>'Violet Perfume',
            'bpm'=>'140',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$shk->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1421',
            'title'=>'Red Swan',
            'bpm'=>'172',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1422',
            'title'=>'Hyacinth',
            'bpm'=>'192',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1423',
            'title'=>'Blaze Emotion (Band Version)',
            'bpm'=>'170',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1424',
            'title'=>'1950',
            'bpm'=>'200',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$slam->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1425',
            'title'=>'Sugar Conspiracy Theory',
            'bpm'=>'170',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$max->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1426',
            'title'=>'Allegro PIU Mosso',
            'bpm'=>'160',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$dMAshura->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1427',
            'title'=>'Annihilator Method',
            'bpm'=>'192',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$dMAshura->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1428',
            'title'=>'Move That Body!',
            'bpm'=>'145',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$dMAshuraFeatSkizzoHanna->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1429',
            'title'=>'Rock The House',
            'bpm'=>'175',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$matduke->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1430',
            'title'=>'Scorpion King',
            'bpm'=>'113',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$r300k->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1431',
            'title'=>'Point Zero One',
            'bpm'=>'170',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$synthWulf->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1433',
            'title'=>'Red Snow',
            'bpm'=>'170',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$cashew->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1434',
            'title'=>'Campanella',
            'bpm'=>'140',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$cashew->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1435',
            'title'=>'You again my love',
            'bpm'=>'137',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$cYOStyleHenohenomoheji->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1436',
            'title'=>'Robot Battle',
            'bpm'=>'198',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$cYOStyle->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1437',
            'title'=>'Bar Bar Bar',
            'bpm'=>'136',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$crayonPop->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1438',
            'title'=>'On and On',
            'bpm'=>'119',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$vixx->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1439',
            'title'=>'Elvis',
            'bpm'=>'135',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$aoa->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1440',
            'title'=>'Very Good',
            'bpm'=>'136',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$blockB->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1441',
            'title'=>'I\'m Sorry',
            'bpm'=>'131',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$cnblue->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1442',
            'title'=>'Pandora',
            'bpm'=>'140',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$kara->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1443',
            'title'=>'Venus',
            'bpm'=>'126',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$shinwha->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1444',
            'title'=>'Hate, Don\'t Hate!',
            'bpm'=>'123',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$dalShabet->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1445',
            'title'=>'Supermagic',
            'bpm'=>'112',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$supremeTeam->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1446',
            'title'=>'Sugar Free',
            'bpm'=>'128',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$tAra->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1447',
            'title'=>'Her',
            'bpm'=>'162',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$blockB->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1448',
            'title'=>'NoNoNo',
            'bpm'=>'106',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$apink->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1449',
            'title'=>'Loner',
            'bpm'=>'125',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$outsider->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1450',
            'title'=>'Flying Duck',
            'bpm'=>'158',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$cherryFilter->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1451',
            'title'=>'Ineffective Boss Without Power',
            'bpm'=>'170',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$norazo->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1452',
            'title'=>'One',
            'bpm'=>'135',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$epikHigh->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1454',
            'title'=>'Selfishness',
            'bpm'=>'160',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$sidSound->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1457',
            'title'=>'Cosmical Rhythm',
            'bpm'=>'128',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$sidSound->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1458',
            'title'=>'Dolly Kiss',
            'bpm'=>'149',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$sidSound->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1459',
            'title'=>'Matador',
            'bpm'=>'168',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$cranky->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1460',
            'title'=>'Milky Way Galaxy',
            'bpm'=>'175',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$threer2->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1461',
            'title'=>'Feel My Happiness',
            'bpm'=>'175',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$threer2->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1462',
            'title'=>'Ragnarok',
            'bpm'=>'170',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$synthWulf->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1463',
            'title'=>'Achluoias',
            'bpm'=>'200',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$dAan->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1464',
            'title'=>'Karyawisata',
            'bpm'=>'150~173',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$vesuviaXREDSHiFT->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1465',
            'title'=>'video out c',
            'bpm'=>'198',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$vospi->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1467',
            'title'=>'Limbo',
            'bpm'=>'125',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$daddyYankee->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1468',
            'title'=>'Melodia',
            'bpm'=>'135',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$lyllooFeatEgas->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1469',
            'title'=>'Que Viva La Vida',
            'bpm'=>'130',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$wisinFtMichelTel->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1470',
            'title'=>'Across the ocean',
            'bpm'=>'130',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$zircon->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1472',
            'title'=>'Stardust Overdrive',
            'bpm'=>'175',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$typeMARS->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1473',
            'title'=>'Reminiscence',
            'bpm'=>'155',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$max->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1474',
            'title'=>'Moment Day',
            'bpm'=>'158',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$max->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1475',
            'title'=>'Amai Yuuwaku Dangerous',
            'bpm'=>'125',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$bakusuteSotokandaIcchome->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1476',
            'title'=>'Yoropiku Pikuyoro!',
            'bpm'=>'198',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$bakusuteSotokandaIcchome->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1477',
            'title'=>'Imprinting',
            'bpm'=>'175',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$sakuzyo->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1478',
            'title'=>'Sudden Romance (PIU Edit)',
            'bpm'=>'152',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$void->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1479',
            'title'=>'Mitotsudaira',
            'bpm'=>'136',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$etia->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1480',
            'title'=>'Smile Diary',
            'bpm'=>'175',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$you->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1481',
            'title'=>'Bad Apple!! feat. Nomico',
            'bpm'=>'138',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$masayoshiMinoshima->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1482',
            'title'=>'Creed -1st Desire- feat. Yu Oda',
            'bpm'=>'163',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$tatshMusicCircle->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1483',
            'title'=>'Sora no Shirabe',
            'bpm'=>'172',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$tatshMusicCircle->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1484',
            'title'=>'Four Seasons of Loneliness verβ feat. Sariyajin',
            'bpm'=>'178',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$tatshMusicCircle->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1485',
            'title'=>'Ai, Yurete...',
            'bpm'=>'152',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$tatshMusicCircle->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1486',
            'title'=>'Setsuna Trip',
            'bpm'=>'145',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$lastNote->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1487',
            'title'=>'Trashy Innocence',
            'bpm'=>'230',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$lastNote->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1488',
            'title'=>'Ren\'ai Yuusha',
            'bpm'=>'190',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$lastNote->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1489',
            'title'=>'After School Stride',
            'bpm'=>'225',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$lastNote->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1490',
            'title'=>'Prime',
            'bpm'=>'165',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$tatsh->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1491',
            'title'=>'Bad ∞ End ∞ Night',
            'bpm'=>'204',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$hitoshizukuPXYama->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1492',
            'title'=>'Queen Of The Red',
            'bpm'=>'188',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$etia->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1493',
            'title'=>'Idealized Romance',
            'bpm'=>'140',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$void->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1494',
            'title'=>'Just Hold On (To All Fighters)',
            'bpm'=>'170',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$void->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1495',
            'title'=>'Unlock',
            'bpm'=>'128',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$miuraDaichiCover->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1496',
            'title'=>'Heavy Rotation',
            'bpm'=>'178',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$aKB48Cover->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1497',
            'title'=>'Break It Down',
            'bpm'=>'176',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$mazo->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1498',
            'title'=>'Hypercube',
            'bpm'=>'145',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$max->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'1499',
            'title'=>'Like Me',
            'bpm'=>'155',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$shk->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'14A0',
            'title'=>'Beethoven Influenza',
            'bpm'=>'170',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$banyaWarak->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'14A1',
            'title'=>'Avalanquiem',
            'bpm'=>'175',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$maxMemme->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'14A2',
            'title'=>'Paradoxx',
            'bpm'=>'220',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$maxSlamNato->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'14C0',
            'title'=>'Bar Bar Bar',
            'bpm'=>'136',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$crayonPop->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'14C1',
            'title'=>'Sugar Free ',
            'bpm'=>'128',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$tAra->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'14C2',
            'title'=>'NoNoNo',
            'bpm'=>'106',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$apink->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'14C3',
            'title'=>'Move That Body!',
            'bpm'=>'145',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$dMAshuraFeatSkizzoHanna->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'14C4',
            'title'=>'Pandora',
            'bpm'=>'140',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$kara->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'14C5',
            'title'=>'Four Seasons of Loneliness verβ feat. Sariyajin ',
            'bpm'=>'178',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$tatshMusicCircle->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'14C6',
            'title'=>'Bad Apple!! feat. Nomico ',
            'bpm'=>'138',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$masayoshiMinoshima->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'14C7',
            'title'=>'Creed -1st Desire- feat. Yu Oda',
            'bpm'=>'163',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$tatshMusicCircle->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'14E0',
            'title'=>'Super Fantasy ',
            'bpm'=>'145',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$shk->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'14E1',
            'title'=>'Yog-Sothoth ',
            'bpm'=>'200',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$nato->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'14E2',
            'title'=>'Silhouette Effect',
            'bpm'=>'167',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$nato->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'14E3',
            'title'=>'Selfishness ',
            'bpm'=>'175',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$sidSound->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'14E4',
            'title'=>'Rock The House ',
            'bpm'=>'175',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$matduke->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'14E5',
            'title'=>'Move That Body! ',
            'bpm'=>'145',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$dMAshuraFeatSkizzoHanna->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'14E6',
            'title'=>'PRIME Opening',
            'bpm'=>'128',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$max->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'14E7',
            'title'=>'Stardust Overdrive ',
            'bpm'=>'175',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$typeMARS->id,
            'game_version_id'=>$prime->id
        ]);
        Song::create([
            'id'=>'14F0',
            'title'=>'Heavy Rotation ',
            'bpm'=>'178',
            'bannerImage'=>$faker->imageUrl(),
            'artist_id'=>$aKB48Cover->id,
            'game_version_id'=>$prime->id
        ]);
    }
}
