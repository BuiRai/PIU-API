<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    // Name of the table on MySql
    protected $table = 'channels';

    // Fillable attributes
    protected $fillable = array('name');

    // Visible fields
    protected $visible = ['id', 'name', 'songs'];

    // Hidden fields
    protected $hidden = ['created_at','updated_at'];

    /*
    * Relations below here
    */

    public function songs()
    {
        return $this->belongsToMany('App\Song')->withTimestamps();
    }
}
