<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;

class SongsFiestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $doin = Artist::where('name', 'Doin')->first();
        $shk = Artist::where('name', 'SHK')->first();
        $max = Artist::where('name', 'MAX')->first();
        $yahpp = Artist::where('name', 'Yahpp')->first();
        $msgoon = Artist::where('name', 'msgoon')->first();
        $banyaProduction = Artist::where('name', 'Banya Production')->first();
        $pxndx = Artist::where('name', 'PXNDX')->first();
        $vassline = Artist::where('name', 'Vassline')->first();
        $som2 = Artist::where('name', 'Som2')->first();
        $banYa = Artist::where('name', 'BanYa')->first();
        $ninaPilots = Artist::where('name', 'Nina Pilots')->first();

        // Game Versions
        $fiesta = GameVersion::where('name', 'Fiesta')->first();

        Song::create([
            'id'=>'1001',
            'title'=>'X-Tree',
            'bpm'=>'190',
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1002',
            'title'=>'Sorceress Elise',
            'bpm'=>'158',
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1003',
            'title'=>'Betrayer -Act 2-',
            'bpm'=>'92',
            'artist_id'=>$msgoon->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1008',
            'title'=>'U Got 2 Know',
            'bpm'=>'127',
            'artist_id'=>$max->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1013',
            'title'=>'Destination',
            'bpm'=>'150',
            'artist_id'=>$shk->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1017',
            'title'=>'Vacuum',
            'bpm'=>'200',
            'artist_id'=>$doin->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1018',
            'title'=>'Narcisista Por Excelencia',
            'bpm'=>'200',
            'artist_id'=>$pxndx->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1021',
            'title'=>'Do It -Reggae Style',
            'bpm'=>'96',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1022',
            'title'=>'Xenesis',
            'bpm'=>'152',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1023',
            'title'=>'Arirang',
            'bpm'=>'160',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1024',
            'title'=>'Tek -Club Copenhagen-',
            'bpm'=>'132',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1025',
            'title'=>'Hello William',
            'bpm'=>'170',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1026',
            'title'=>'Turkey March -Minimal Tunes-',
            'bpm'=>'130',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1027',
            'title'=>'Get Up (And Go)',
            'bpm'=>'164',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1028',
            'title'=>'Phantom -Intermezzo-',
            'bpm'=>'140',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1029',
            'title'=>'Mission Possible -Blow Back-',
            'bpm'=>'128',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1030',
            'title'=>'Pumping Jumping',
            'bpm'=>'116',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1031',
            'title'=>'B.P Classic Remix',
            'bpm'=>'164',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1033',
            'title'=>'PaPa Helloizing',
            'bpm'=>'    145~158',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1034',
            'title'=>'B.P Classic Remix 2',
            'bpm'=>'180',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1035',
            'title'=>'Hard Core Rock Mix',
            'bpm'=>'???',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1036',
            'title'=>'Pro POP Mix',
            'bpm'=>'151',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1037',
            'title'=>'Set Up Me2 Mix',
            'bpm'=>'122',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1038',
            'title'=>'msgoon RMX Pt. 5',
            'bpm'=>'102.8',
            'artist_id'=>$msgoon->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1039',
            'title'=>'msgoon RMX Pt. 6',
            'bpm'=>'150',
            'artist_id'=>$msgoon->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1042',
            'title'=>'Deja Vu',
            'bpm'=>'115',
            'artist_id'=>$som2->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1043',
            'title'=>'Narcisista por Excelencia',
            'bpm'=>'164',
            'artist_id'=>$pxndx->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1044',
            'title'=>'Dawn of the Apocalypse',
            'bpm'=>'???',
            'artist_id'=>$vassline->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1048',
            'title'=>'Final Audition 2 ',
            'bpm'=>'130',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1049',
            'title'=>'Final Audition 3 U.F',
            'bpm'=>'130.5',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1050',
            'title'=>'Final Audition Episode 2-X',
            'bpm'=>'170',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1051',
            'title'=>'Love is a Danger Zone',
            'bpm'=>'140',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1052',
            'title'=>'Love is a Danger Zone 2',
            'bpm'=>'162',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1053',
            'title'=>'Extravaganza',
            'bpm'=>'195',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1054',
            'title'=>'Chicken Wing',
            'bpm'=>'200',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1055',
            'title'=>'Winter',
            'bpm'=>'168',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1056',
            'title'=>'Solitary 2',
            'bpm'=>'136',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1057',
            'title'=>'Moonlight',
            'bpm'=>'180',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1058',
            'title'=>'Witch Doctor',
            'bpm'=>'195',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1059',
            'title'=>'Exceed 2 Opening',
            'bpm'=>'???',
            'artist_id'=>$banYa->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1060',
            'title'=>'NX Opening',
            'bpm'=>'133',
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1061',
            'title'=>'K.O.A -Alice in Wonderworld',
            'bpm'=>'156',
            'artist_id'=>$banyaProduction->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1062',
            'title'=>'Bemera',
            'bpm'=>'210',
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1063',
            'title'=>'Pumptris 8Bit ver.',
            'bpm'=>'162',
            'artist_id'=>$yahpp->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1064',
            'title'=>'Destination ',
            'bpm'=>'150',
            'artist_id'=>$shk->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1065',
            'title'=>'Procedimientos Para Llegar A Un Comun Acuerdo',
            'bpm'=>'160',
            'artist_id'=>$pxndx->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1094',
            'title'=>'Tepris',
            'bpm'=>'145',
            'artist_id'=>$doin->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1095',
            'title'=>'Napalm',
            'bpm'=>'185',
            'artist_id'=>$doin->id,
            'game_version_id'=>$fiesta->id
        ]);
        Song::create([
            'id'=>'1096',
            'title'=>'Dieciseis',
            'bpm'=>'143',
            'artist_id'=>$ninaPilots->id,
            'game_version_id'=>$fiesta->id
        ]);
    }
}
