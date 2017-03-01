<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Artist;
use App\GameVersion;
use Faker\Factory as Faker;

class SongsPrime2Seeder extends Seeder
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
    $max = Artist::where('name', 'MAX')->first();
    $memme = Artist::where('name', 'Memme')->first();
    $shk = Artist::where('name', 'SHK')->first();
    $nato = Artist::where('name', 'Nato')->first();
    $doin = Artist::where('name', 'Doin')->first();
    $lunaticSounds = Artist::where('name', 'Lunatic Sounds')->first();
    $mzet = Artist::where('name', 'mzet:-P')->first();
    $bigBang = Artist::where('name', 'Big Bang')->first();
    $gFriend = Artist::where('name', 'GFriend')->first();
    $iKon = Artist::where('name', 'iKon')->first();
    $produce101 = Artist::where('name', 'Produce 101')->first();
    $blockB = Artist::where('name', 'Block B')->first();
    $blackPink = Artist::where('name', 'Black Pink')->first();
    $exid = Artist::where('name', 'EXID')->first();
    $mamamoo = Artist::where('name', 'Mamamoo')->first();
    $tAra = Artist::where('name', 'T-ara')->first();
    $outsider = Artist::where('name', 'Outsider')->first();
    $tatshMusicCircle = Artist::where('name', 'TatshMusicCircle')->first();
    $vospi = Artist::where('name', 'Vospi')->first();
    $warak = Artist::where('name', 'Warak')->first();
    $atas = Artist::where('name', 'ATAS')->first();
    $kien = Artist::where('name', 'KIEN')->first();
    $transin = Artist::where('name', 'Transin')->first();

    // Game versions
    $prime2 = GameVersion::where('name', 'Prime 2')->first();

    Song::create([
      'id'=>'1501',
      'title'=>'Last Rebirth',
      'bpm'=>'120',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$shk->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'1503',
      'title'=>'Hellfire',
      'bpm'=>'170',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$memme->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'1507',
      'title'=>'God Mode feat. Skizzo',
      'bpm'=>'152',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$nato->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'1509',
      'title'=>'Further',
      'bpm'=>'194',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$doin->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'1512',
      'title'=>'Bring Back the Beat',
      'bpm'=>'160',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$lunaticSounds->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'1516',
      'title'=>'Sarabande',
      'bpm'=>'157',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$max->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'1525',
      'title'=>'Arcana Force',
      'bpm'=>'175',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$mzet->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'1544',
      'title'=>'Bang Bang Bang',
      'bpm'=>'135',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$bigBang->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'1545',
      'title'=>'Me Gustas Tu',
      'bpm'=>'106',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$gFriend->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'1546',
      'title'=>'RHYTHM TA',
      'bpm'=>'82',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$iKon->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'1548',
      'title'=>'Pick Me',
      'bpm'=>'128',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$produce101->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'1549',
      'title'=>'Jackpot',
      'bpm'=>'130',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$blockB->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'1551',
      'title'=>'Boombayah',
      'bpm'=>'125',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$blackPink->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'1553',
      'title'=>'Up & Down',
      'bpm'=>'112',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$exid->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'1555',
      'title'=>'You\'re the Best',
      'bpm'=>'122',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$mamamoo->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'1556',
      'title'=>'Number Nine',
      'bpm'=>'128',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$tAra->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'1557',
      'title'=>'Acquaintance',
      'bpm'=>'130',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$outsider->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'1564',
      'title'=>'Moon Light Dance',
      'bpm'=>'182',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$tatshMusicCircle->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([ // NOT OFFICIAL ID YET
      'id'=>'1565',
      'title'=>'Just Kiddin',
      'bpm'=>'125',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$vospi->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'15A6',
      'title'=>'Death Moon',
      'bpm'=>'160',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$shk->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'15A8',
      'title'=>'Christmas Memories',
      'bpm'=>'170',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$warak->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'15B0',
      'title'=>'Asterios (Reentry)',
      'bpm'=>'148',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$atas->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'15B1',
      'title'=>'Le Grand Bleu',
      'bpm'=>'165',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$kien->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([ // NOT OFFICIAL ID YET
      'id'=>'15B2',
      'title'=>'Clue',
      'bpm'=>'140',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$transin->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'15D0',
      'title'=>'Vulcan',
      'bpm'=>'175',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$memme->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'15E0', // NOT OFFICIAL ID YET
      'title'=>'Me Gustas Tu',
      'bpm'=>'106',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$gFriend->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'15E1',
      'title'=>'Bang Bang Bang',
      'bpm'=>'135',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$bigBang->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'15F0',
      'title'=>'Sarabande',
      'bpm'=>'157',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$max->id,
      'game_version_id'=>$prime2->id
    ]);
    Song::create([
      'id'=>'15F1',
      'title'=>'Death Moon',
      'bpm'=>'160',
      'bannerImage'=>$faker->imageUrl(),
      'artist_id'=>$shk->id,
      'game_version_id'=>$prime2->id
    ]);
  }
}
