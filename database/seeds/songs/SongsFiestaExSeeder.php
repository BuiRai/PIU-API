<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;
use App\Type;
use App\Channel;

class SongsFiestaExSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $max = Artist::where('name', 'MAX')->first();
        // $banyaProduction = Artist::where('name', 'Banya Production')->first();
        // $doin = Artist::where('name', 'Doin')->first();
        // $shk = Artist::where('name', 'SHK')->first();
        // $dMAshuraFeatMCJayVeronica = Artist::where('name', 'DM Ashura feat. MC Jay & Veronica')->first();
        // $dMAshura = Artist::where('name', 'DM Ashura')->first();
        // $zircon = Artist::where('name', 'Zircon')->first();
        // $vospi = Artist::where('name', 'Vospi')->first();
        // $sanxion7 = Artist::where('name', 'Sanxion7')->first();
        // $throwdown = Artist::where('name', 'Throwdown')->first();
        // $crash = Artist::where('name', 'Crash')->first();
        // $mAXSeorryangSIDSOUND = Artist::where('name', 'MAX & Seorryang (SID-SOUND)')->first();
        // $vA = Artist::where('name', 'V.A.')->first();
        // $mAXRorychesellSIDSOUND = Artist::where('name', 'MAX & Rorychesell (SID-SOUND)')->first();

        $max = Artist::find(22);
        $banyaProduction = Artist::find(16);
        $doin = Artist::find(20);
        $shk = Artist::find(21);
        $dMAshuraFeatMCJayVeronica = Artist::find(23);
        $dMAshura = Artist::find(24);
        $zircon = Artist::find(25);
        $vospi = Artist::find(26);
        $sanxion7 = Artist::find(27);
        $throwdown = Artist::find(28);
        $crash = Artist::find(29);
        $mAXSeorryangSIDSOUND = Artist::find(30);
        $vA = Artist::find(31);
        $mAXRorychesellSIDSOUND = Artist::find(32);

        // Types
        $shortType = Type::find(1);
        $normalType = Type::find(2);
        $remixType = Type::find(3);
        $fullType = Type::find(4);

        // Game versions
        $fiestaEx = GameVersion::where('name', 'Fiesta Ex')->first();

        $song = Song::create([
            'id'=>'1101',
            'title'=>'Cleaner',
            'bpm'=>'203',
            'artist_id'=>$doin->id,
            'game_version_id'=>$fiestaEx->id,
            'type_id'=>$normalType->id
        ]);
        $song->channels()->attach([6]);
        // $song = Song::create([
        //     'id'=>'1102',
        //     'title'=>'Interference',
        //     'bpm'=>'180.4',
        //     'artist_id'=>$doin->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$normalType->id
        // ]);
        // $song->channels()->attach([6]);
        // $song = Song::create([
        //     'id'=>'1103',
        //     'title'=>'Reality',
        //     'bpm'=>'135',
        //     'artist_id'=>$shk->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$normalType->id
        // ]);
        // $song->channels()->attach([6]);
        // $song = Song::create([
        //     'id'=>'1104',
        //     'title'=>'Take Out',
        //     'bpm'=>'170',
        //     'artist_id'=>$shk->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$normalType->id
        // ]);
        // $song->channels()->attach([6]);
        // $song = Song::create([
        //     'id'=>'1105',
        //     'title'=>'Butterfly',
        //     'bpm'=>'128',
        //     'artist_id'=>$mAXRorychesellSIDSOUND->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$normalType->id
        // ]);
        // $song->channels()->attach([6]);
        // $song = Song::create([
        //     'id'=>'1106',
        //     'title'=>'Overblow',
        //     'bpm'=>'155',
        //     'artist_id'=>$max->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$normalType->id
        // ]);
        // $song->channels()->attach([6]);
        // $song = Song::create([
        //     'id'=>'1107',
        //     'title'=>'We Got 2 Know',
        //     'bpm'=>'128',
        //     'artist_id'=>$max->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$normalType->id
        // ]);
        // $song->channels()->attach([6]);
        // $song = Song::create([
        //     'id'=>'1119',
        //     'title'=>'Crashday',
        //     'bpm'=>'220',
        //     'artist_id'=>$crash->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$normalType->id
        // ]);
        // $song->channels()->attach([6]);
        // $song = Song::create([
        //     'id'=>'1123',
        //     'title'=>'Hungarian Dance V',
        //     'bpm'=>'145',
        //     'artist_id'=>$banyaProduction->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$normalType->id
        // ]);
        // $song->channels()->attach([6]);
        // $song = Song::create([
        //     'id'=>'1124',
        //     'title'=>'The Devil',
        //     'bpm'=>'130~240',
        //     'artist_id'=>$banyaProduction->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$normalType->id
        // ]);
        // $song->channels()->attach([6]);
        // $song = Song::create([
        //     'id'=>'1126',
        //     'title'=>'Native',
        //     'bpm'=>'135',
        //     'artist_id'=>$shk->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$normalType->id
        // ]);
        // $song->channels()->attach([6]);
        // $song = Song::create([
        //     'id'=>'1131',
        //     'title'=>'Vacuum Cleaner',
        //     'bpm'=>'222.22',
        //     'artist_id'=>$doin->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$remixType->id
        // ]);
        // $song->channels()->attach([6, 11]);
        // $song = Song::create([
        //     'id'=>'1132',
        //     'title'=>'Everybody Got 2 Know',
        //     'bpm'=>'128',
        //     'artist_id'=>$max->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$remixType->id
        // ]);
        // $song->channels()->attach([6, 11]);
        // $song = Song::create([
        //     'id'=>'1135',
        //     'title'=>'Interference ',
        //     'bpm'=>'180.4',
        //     'artist_id'=>$doin->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$fullType->id
        // ]);
        // $song->channels()->attach([6, 10]);
        // $song = Song::create([
        //     'id'=>'1142',
        //     'title'=>'Crashday',
        //     'bpm'=>'220',
        //     'artist_id'=>$crash->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$fullType->id
        // ]);
        // $song->channels()->attach([6, 10]);
        // $song = Song::create([
        //     'id'=>'1145',
        //     'title'=>'Trotpris',
        //     'bpm'=>'156.118',
        //     'artist_id'=>$doin->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$shortType->id
        // ]);
        // $song->channels()->attach([6, 12]);
        // $song = Song::create([
        //     'id'=>'1146',
        //     'title'=>'Cleaner',
        //     'bpm'=>'203',
        //     'artist_id'=>$doin->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$shortType->id
        // ]);
        // $song->channels()->attach([6, 12]);
        // $song = Song::create([
        //     'id'=>'1147',
        //     'title'=>'Take Out',
        //     'bpm'=>'170',
        //     'artist_id'=>$shk->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$shortType->id
        // ]);
        // $song->channels()->attach([6, 12]);
        // $song = Song::create([
        //     'id'=>'1148',
        //     'title'=>'Overblow',
        //     'bpm'=>'155',
        //     'artist_id'=>$max->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$shortType->id
        // ]);
        // $song->channels()->attach([6, 12]);
        // $song = Song::create([
        //     'id'=>'1149',
        //     'title'=>'X-Rave',
        //     'bpm'=>'147',
        //     'artist_id'=>$dMAshura->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$shortType->id
        // ]);
        // $song->channels()->attach([6, 12]);
        // $song = Song::create([
        //     'id'=>'1152',
        //     'title'=>'Pavane',
        //     'bpm'=>'160',
        //     'artist_id'=>$vA->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$normalType->id
        // ]);
        // $song->channels()->attach([6]);
        // $song = Song::create([
        //     'id'=>'1153',
        //     'title'=>'Pine Nut',
        //     'bpm'=>'200',
        //     'artist_id'=>$doin->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$normalType->id
        // ]);
        // $song->channels()->attach([6]);
        // $song = Song::create([
        //     'id'=>'1154',
        //     'title'=>'ASDF',
        //     'bpm'=>'170',
        //     'artist_id'=>$doin->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$normalType->id
        // ]);
        // $song->channels()->attach([6]);
        // $song = Song::create([
        //     'id'=>'1160',
        //     'title'=>'Jonathan\'s Dream',
        //     'bpm'=>'140',
        //     'artist_id'=>$mAXSeorryangSIDSOUND->id,
        //     'game_version_id'=>$fiestaEx->id,
        //     'type_id'=>$normalType->id
        // ]);
        // $song->channels()->attach([6]);

        // FALTAN LAS DE LA PRO Y PRO 2
    }
}
