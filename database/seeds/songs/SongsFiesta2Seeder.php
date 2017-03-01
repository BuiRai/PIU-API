<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;

class SongsFiesta2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stianK = Artist::where('name', 'Stian K')->first();
        $doin = Artist::where('name', 'Doin')->first();
        $shk = Artist::where('name', 'SHK')->first();
        $max = Artist::where('name', 'MAX')->first();
        $doinMAX = Artist::where('name', 'Doin & MAX')->first();
        $smiley = Artist::where('name', 'Smiley')->first();
        $kURiZiLL = Artist::where('name', 'KURi-ZiLL')->first();
        $kaW = Artist::where('name', 'KaW')->first();
        $inspectorK = Artist::where('name', 'Inspector K')->first();
        $hiG = Artist::where('name', 'Hi-G')->first();
        $futureFunkSquad = Artist::where('name', 'Future Funk Squad')->first();
        $dicloniusKid = Artist::where('name', 'Diclonius Kid')->first();
        $coconut = Artist::where('name', 'Coconut')->first();
        $celldweller = Artist::where('name', 'Celldweller')->first();
        $beltaine = Artist::where('name', 'Beltaine')->first();
        $affinity = Artist::where('name', 'Affinity')->first();
        $synthWulf = Artist::where('name', 'SynthWulf')->first();
        $jJMiMidiDFtHannaStockzell = Artist::where('name', 'JJ-Mi & Midi-D Ft. Hanna Stockzell')->first();
        $synthWulfMAX = Artist::where('name', 'SynthWulf & MAX')->first();
        $squar = Artist::where('name', 'SQUAR')->first();
        $sidSound = Artist::where('name', 'SID-SOUND')->first();
        $yakWon = Artist::where('name', 'Yak Won')->first();
        $sugarEyes = Artist::where('name', 'Sugar Eyes')->first();
        $benChalatit = Artist::where('name', 'Ben Chalatit')->first();
        $saykoji = Artist::where('name', 'Saykoji')->first();
        $ayuTingTing = Artist::where('name', 'Ayu Ting Ting')->first();
        $banYaSynthWulf = Artist::where('name', 'BanYa & SynthWulf')->first();
        $banYaCranky = Artist::where('name', 'BanYa & Cranky')->first();
        $banYaDMAshura = Artist::where('name', 'BanYa & DM Ashura')->first();
        $nightmare = Artist::where('name', 'Nightmare')->first();

        // Game versions
        $fiesta2 = GameVersion::where('name', 'Fiesta 2')->first();

        Song::create([
            'id'=>'1309',
            'title'=>'FFF (Flew Far Faster)',
            'bpm'=>'200',
            'artist_id'=>$doin->id,
            'game_version_id'=>$fiesta2->id
        ]);
        Song::create([
            'id'=>'1310',
            'title'=>'Unique',
            'bpm'=>'145',
            'artist_id'=>$shk->id,
            'game_version_id'=>$fiesta2->id
        ]);
        Song::create([
            'id'=>'1311',
            'title'=>'Accident',
            'bpm'=>'183',
            'artist_id'=>$max->id,
            'game_version_id'=>$fiesta2->id
        ]);
        Song::create([
            'id'=>'1312',
            'title'=>'D',
            'bpm'=>'180',
            'artist_id'=>$max->id,
            'game_version_id'=>$fiesta2->id
        ]);
        Song::create([
            'id'=>'1313',
            'title'=>'U Got Me Rocking',
            'bpm'=>'128',
            'artist_id'=>$max->id,
            'game_version_id'=>$fiesta2->id
        ]);
        Song::create([
            'id'=>'1314',
            'title'=>'Lucid (PIU Edit)',
            'bpm'=>'40~190',
            'artist_id'=>$yakWon->id,
            'game_version_id'=>$fiesta2->id
        ]);
        Song::create([
            'id'=>'1334',
            'title'=>'Sik Asik',
            'bpm'=>'147',
            'artist_id'=>$ayuTingTing->id,
            'game_version_id'=>$fiesta2->id
        ]);
        Song::create([
            'id'=>'1335',
            'title'=>'Online',
            'bpm'=>'118',
            'artist_id'=>$saykoji->id,
            'game_version_id'=>$fiesta2->id
        ]);
        Song::create([
            'id'=>'1336',
            'title'=>'Dam',
            'bpm'=>'141',
            'artist_id'=>$benChalatit->id,
            'game_version_id'=>$fiesta2->id
        ]);
        Song::create([
            'id'=>'1337',
            'title'=>'Sugar Eyes',
            'bpm'=>'122',
            'artist_id'=>$sugarEyes->id,
            'game_version_id'=>$fiesta2->id
        ]);
        Song::create([
            'id'=>'1338',
            'title'=>'Log-in',
            'bpm'=>'140',
            'artist_id'=>$shk->id,
            'game_version_id'=>$fiesta2->id
        ]);
        Song::create([
            'id'=>'1339',
            'title'=>'Windmill',
            'bpm'=>'246',
            'artist_id'=>$yakWon->id,
            'game_version_id'=>$fiesta2->id
        ]);
        Song::create([
            'id'=>'1340',
            'title'=>'Follow Me',
            'bpm'=>'155',
            'artist_id'=>$shk->id,
            'game_version_id'=>$fiesta2->id
        ]);
        Song::create([
            'id'=>'1390',
            'title'=>'Mental Rider',
            'bpm'=>'120~140',
            'artist_id'=>$squar->id,
            'game_version_id'=>$fiesta2->id
        ]);
        Song::create([
            'id'=>'13A2',
            'title'=>'Infinity RMX',
            'bpm'=>'175',
            'artist_id'=>$synthWulfMAX->id,
            'game_version_id'=>$fiesta2->id
        ]);
        Song::create([
            'id'=>'13A3',
            'title'=>'What Are You Doin?',
            'bpm'=>'200',
            'artist_id'=>$doinMAX->id,
            'game_version_id'=>$fiesta2->id
        ]);
        Song::create([
            'id'=>'13E0',
            'title'=>'Pop The Track ',
            'bpm'=>'160',
            'artist_id'=>$jJMiMidiDFtHannaStockzell->id,
            'game_version_id'=>$fiesta2->id
        ]);
        Song::create([
            'id'=>'13E1',
            'title'=>'Passacaglia',
            'bpm'=>'160',
            'artist_id'=>$synthWulf->id,
            'game_version_id'=>$fiesta2->id
        ]);
        Song::create([
            'id'=>'13E2',
            'title'=>'Ignis Fatuus (DM Ashura Mix)',
            'bpm'=>'220',
            'artist_id'=>$banYaDMAshura->id,
            'game_version_id'=>$fiesta2->id
        ]);
        Song::create([
            'id'=>'13E3',
            'title'=>'FFF (Flew Far Faster) ',
            'bpm'=>'200',
            'artist_id'=>$doin->id,
            'game_version_id'=>$fiesta2->id
        ]);
        Song::create([
            'id'=>'13E4',
            'title'=>'Unique ',
            'bpm'=>'145',
            'artist_id'=>$shk->id,
            'game_version_id'=>$fiesta2->id
        ]);
        Song::create([
            'id'=>'13E5',
            'title'=>'U Got Me Rocking ',
            'bpm'=>'128',
            'artist_id'=>$max->id,
            'game_version_id'=>$fiesta2->id
        ]);

        // FALTAN LAS DE LA PRO Y PRO 2
    }
}
