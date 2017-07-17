<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Song extends Model
{
    use SearchableTrait;

    public $incrementing = false;

    // Name of the table on MySql
    protected $table='songs';

    // Fillable attributes
    protected $fillable = array('id', 'title','bpm','bannerImage' , 'artist_id', 'game_version_id', 'type_song_id');

    // Hidden fields
    protected $hidden = ['created_at','updated_at'];

    protected $searchable = [
        'columns' => [
            'title' => 10
        ]
    ];

    /*
    * Relations below here
    */

     /**
    * A song has one artist
    * @return \Illuminate\Database\Eloquent\Relations\HasOne
    */
    public function artist()
    {
        return $this->belongsTo('App\Artist', 'artist_id');
    }

    public function gameVersion()
    {
        return $this->belongsTo('App\GameVersion', 'game_version_id');
    }

    public function type()
    {
        return $this->belongsTo('App\TypeSong', 'type_song_id');
    }

    public function levels()
    {
        return $this->hasMany('App\Level');
    }

    public function channels()
    {
        return $this->belongsToMany('App\Channel')->withTimestamps();
    }

}
