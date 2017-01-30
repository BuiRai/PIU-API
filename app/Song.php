<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{

    public $incrementing = false;

    // Name of the table on MySql
    protected $table='songs';

    // Fillable attributes
    protected $fillable = array('id', 'title','bpm','bannerImage' , 'artist_id', 'game_version_id');

    protected $visible = ['id', 'title', 'bpm', 'bannerImage', 'artist', 'game_version'];

    // Hidden fields
    protected $hidden = ['created_at','updated_at'];

    /*
     * Relations below here
     */

    /**
     * A song has one artist
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function artist(){
        return $this->belongsTo('App\Artist', 'artist_id');
    }

    public function gameVersion() {
        return $this->belongsTo('App\GameVersion', 'game_version_id');
    }

}
