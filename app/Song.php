<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{

    public $incrementing = false;

    // Name of the table on MySql
    protected $table='songs';

    // Fillable attributes
    protected $fillable = array('id', 'title','artist','bpm','bannerImage');

    // Hidden fields
    protected $hidden = ['created_at','updated_at'];

    /*
     * Relations below here
     */

}
