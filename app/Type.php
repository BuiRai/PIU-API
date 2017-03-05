<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    // Name of the table on MySql
    protected $table = 'types';

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
        return $this->hasMany('App\Song');
    }

}
